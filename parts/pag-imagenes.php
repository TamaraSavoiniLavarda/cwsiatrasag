<?php get_header(); ?>
<main>
    <!-- SLIDER -->
    <section class="cabure-slider">
        <div class="cabure-slider-img">
            <?php
            echo do_shortcode('[smartslider3 slider="7"]');
            ?>
        </div>
    </section>

    <!-- Imagenes -->
    <section class="cabure-reservas">
        <div class="cabure-contenedor__mod">
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cabure_galeria">
                            <div class="cabure-galeria-titulo-azul">
                                Mantenimiento predio Lago Salto Grande
                            </div>
                            <?php
                                echo do_shortcode('[smartslider3 slider="9"]');
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cabure_galeria">
                            <div class="cabure-galeria-titulo-verde">
                                Acciones de mejora en nuestro predio del Lago
                            </div>
                            <?php
                                echo do_shortcode('[smartslider3 slider="10"]');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 cabure-imagenes-verMas">
                    <button class="cabure-home-verMas-btn">
                    + + + + + <span>&nbsp;&nbsp;Ver más galerías&nbsp;&nbsp;</span> + + + + +
                    </button>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>