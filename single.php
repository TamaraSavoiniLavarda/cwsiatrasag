<?php get_header(); ?>
<main>

<div class="container-fluid">
  <div class="mt-3 mb-5 ml-5"><h2>NOTICIAS</h2></div>
</div>
  <div class="container">
    <div class="row">
      <?php if (have_posts()): while (have_posts()):  the_post();
          $imagen = get_the_post_thumbnail_url();
          $titulo = get_the_title();
          $contenido = get_the_content();
          endwhile;
        ?>
      <div class="col-lg-12">
        <section>	
        <img  src="<?= $imagen?>">
        <div class="container-fluid">
          <h2><?=$titulo;?></h2>
        </div>
        </section>
      </div>
      <div class="col-lg-8">
        <article class=" mt-5"><?=$contenido?></article>
      </div>

  <?php endif; ?>
      <div class="col-lg-4 mt-5">
        <div class="container-fluid">
          <div class="row">
            <?php
              // ob_start();
                getSingleNoticias(new WP_Query(array(
                  'post_type' => 'post',
                  'post_status' => 'publish',
                  'posts_per_page' => 4
                )),'12');
              // ob_get_clean();
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>