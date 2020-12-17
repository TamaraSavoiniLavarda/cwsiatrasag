<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) :  the_post();
    $imagen = get_the_post_thumbnail_url();
    $titulo = get_the_title();
    $contenido = get_the_content();
  endwhile;
?>


  <main>

    <div class="container">
      <div class="cabure-home-card">
        <div class="col-lg-12">
          <div class="cabure-novedad-titulo-txt">
            <h2><?= $titulo ?></h2>
          </div>
        </div>
      <div class="cabure-single-img">
        <img src="<?=$imagen?>" alt="novedad">
      </div>
      <hr />
      <div class="cabure-home-contenido">
        <?=$contenido?>
      </div>
      <hr/>
    </div>

      <?php endif; ?>

      

      </div>
    </div>

    
  </main>
  <?php get_footer(); ?>