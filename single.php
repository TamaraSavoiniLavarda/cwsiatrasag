<?php get_header(); ?>


<?php if (have_posts()): while (have_posts()):  the_post();
          $imagen = get_the_post_thumbnail_url();
          $titulo = get_the_title();
          $contenido = get_the_content();
          endwhile;
?>


<main>

<div class="container-fluid">
  <div class="mt-3 mb-5 ml-5"><h2>NOTICIAS</h2></div>
</div>
  <div class="container">
    <div class="row">
      
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
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>