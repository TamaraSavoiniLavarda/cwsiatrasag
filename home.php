<?php get_header(); ?>
<main>
  <!-- SLIDER -->
  <section class="cabure-slider">
    <div class="cabure-slider-img">
      <?php
      echo do_shortcode('[smartslider3 slider="8"]');
      ?>
    </div>
  </section>
  <section class="cabure-novedades-cards mb-5">
    <div class="container-fluid">
      <div class="row">
        <?php
        getHomeNovedades(new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => 2,
        )), '6');
        ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>