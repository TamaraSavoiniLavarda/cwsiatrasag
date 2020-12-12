<?php get_header();?>
<main>
    <!-- SLIDER -->
    <section class="cabure-slider">
      <div class="cabure-slider-img">
        <?php
            echo do_shortcode('[smartslider3 slider="6"]');
        ?>
      </div>
    </section>

<!-- Imagenes -->
<section class="cabure-reservas">
    <div class="cabure-contenedor__mod">

    <div class="container-fluid mt-5 mb-5" >
        <div class="row">
            <div class="col-lg-6 pl-3 pr-3">
                <div class="cabure_galeria1">
                Mantenimiento predio Lago Salto Grande
                </div>
                <?php
                    echo do_shortcode('[smartslider3 slider="8"]');
                ?>
            </div>
            <div class="col-lg-6 pl-3 pr-3">
                <div class="cabure_galeria2">
                Acciones de mejora en nuestro predio del Lago
                </div>
                <?php
                    echo do_shortcode('[smartslider3 slider="9"]');
                ?>
            </div>
        </div>
    </div>
</div>
</section>

</main>
<?php get_footer(); ?>