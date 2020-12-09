<?php
  get_header();
/*
  Formas de mostrar algo en php:
  <?php echo 'hola mundo'; ?>
  <?php echo('hola mundo'); ?>
  <?='hola mundo'; ?>
*/
  
?>
<main>
    <!-- SLIDER -->
    <section class="cabure-slider">
      <div class="cabure-slider-img">
        <img src="<?= getIMG('sliderRecortado.jpg');?>" alt="bienvenidos" />
      </div>
    </section>
    <!-- TITULO NOVEDADES -->
    <section class="cabure-novedades text-center">
        <div class="cabure-novedades-img">
          <img src="<?= getIMG('novedades.png');?>" alt="novedades">
        </div>
    </section>  
    <!-- NOVEDADES CARDS -->
    <section class="cabure-novedades-cards mb-5">
      <div class="container-fluid">
        <div class="row">
          <?php 
          getAllNovedades(new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 4,
          )),'3');
          ?>
        </div>
      </div>
    </section>
</main>
<?php get_footer(); ?>