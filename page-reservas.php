<?php get_header();?>
<main>
    <!-- SLIDER -->
    <section class="cabure-slider">
      <div class="cabure-slider-img">
        <?php
            echo do_shortcode('[smartslider3 slider="3"]');
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
                            <p>Realizá aquí la pre-reserva del Salón ó Quincho de SIATRASAG.</p>
                            <p><strong>Enviaremos confirmación digital vía Whatsapp</strong></p>
                        </div>
                            <?= do_shortcode('[contact-form-7 id="43"]')?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>