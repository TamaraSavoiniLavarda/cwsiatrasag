<?php get_header(); ?>
<main>
	<!-- SLIDER -->
    <section class="cabure-slider">
      <div class="cabure-slider-img">
        <img src="<?= getIMG('slide_reservas.jpg');?>" alt="bienvenidos" />
      </div>
    </section> 
	 <section class="cabure-novedades-cards mb-5">
      <div class="container-fluid">
        <div class="row">
		<?php 
			getHomeNovedades(new WP_Query(array(
			  'post_type' => 'post',
              'post_status' => 'publish',
              'posts_per_page' => 2,
			)),'6');
		?>
		</div>
	</div>
</main>
<?php get_footer(); ?>
