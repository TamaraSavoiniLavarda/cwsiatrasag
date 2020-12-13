<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) :  the_post();
    $imagen = get_the_post_thumbnail_url();
    $titulo = get_the_title();
    $contenido = get_the_content();
    $d = get_the_date('d');
    $m = get_the_date('F');
    $a = get_the_date('Y');
    $fecha = $d . ' '. 'de' . ' '. $m . ' ' . 'de' . ' ' . $a;
  endwhile;
?>


  <main>

    <div class="container">
      <!-- <div class="mt-3 mb-5 ml-5 cabure-novedad-titulo-txt">
        ///// <span><?= $titulo ?></span> /////
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <section class="cabure-single-img">
            <img src="<?= $imagen ?>">
          </section>
        </div>
        <div class="col-lg-6 mt-3 text-left">
          <img src="<?= getIMG('foto_perfil_novedades.png') ?>">
          <b>por Siatrasag</b>
        </div>
        <div class="col-lg-6 mt-5 text-right">
          <b><?= $fecha ?></b>
        </div>
        <div class="col-lg-12">
          <hr />
        </div>


        <div class="col-lg-12">
          <article class="mt-4 mb-5">
            <?= $contenido ?>
          </article>
        </div> -->
        <div class="col-lg-12 mb-5">
          <div class="cabure-home-card">
            <div class="cabure-novedad-titulo-txt">
            ///// <span><?= $titulo ?></span> /////
          </div>
          <div class="cabure-single-img">
            <img src="<?=$imagen?>" alt="novedad">
          </div>
          <div class="cabure-home-autor">
            <img src="<?=getIMG('foto_perfil_novedades.png')?>" alt="">
            <span> por Siatrasag</span>
            <div class="cabure-home-absolute">
              <?=$fecha?>
            </div>
          </div>
          <hr />
          <div class="cabure-home-contenido">
            <?=$contenido?>
          </div>
      </div>
    </div>

      <?php endif; ?>

      

      </div>
    </div>

    
  </main>
  <?php get_footer(); ?>