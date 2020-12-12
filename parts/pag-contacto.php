<?php get_header(); ?>
<main>
    <!-- SLIDER -->
    <section class="cabure-slider">
        <div class="cabure-slider-img">
            <?php
            echo do_shortcode('[smartslider3 slider="5"]');
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
                        <?= do_shortcode('[contact-form-7 id="50" title="Formulario de contacto"]') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>