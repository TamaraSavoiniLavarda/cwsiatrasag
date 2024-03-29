<?php get_header(); ?>
<main>
    <!-- SLIDER -->
    <section class="cabure-slider">
        <div class="cabure-slider-img">
            <?php
            echo do_shortcode('[smartslider3 slider="6"]');
            ?>
        </div>
    </section>
    <!-- CONTACT FORM -->
    <section class="cabure-reservas">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <div class="cabure-formulario">
                        <div class="cabure-reservas-titulo">
                            <p>Cargá aquí tus datos y a la brevedad te contactaremos </br> para hacerte llegar tu Carnet Digital de Afiliación!</p>
                        </div>
                        <?= do_shortcode('[contact-form-7 id="5" title="Contact form 1"]') ?>
                    </div>
                    <div class="text-center cabure_descarga">
                        <a href="<?= home_url() . '/PDF/formulario-afiliado.pdf'; ?>"><span class="barras">/////</span> &nbsp; Descargá aqui el formulario de inscripción para afiliarte &nbsp; <span class="barras">/////</span></a>
                    </div>
                    
                </div>
            </div>
        </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>