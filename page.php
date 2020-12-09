<?php get_header(); ?>

<main>
    <?php
    $tituloActual = wp_title('');
    $titulo = strtolower($tituloActual);
    switch ($titulo) {
        case 'nosotros':
            get_template_part('page', 'nosotros.php');
            break;
        case 'contacto':
            get_template_part('page', 'contacto.php');
            break;
        default:
            defaultPage($tituloActual);
            break;
    }

    ?>
</main>

<?php
function defaultPage($titulo)
{ ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><?= $titulo; ?></h1>
            </div>
            <div class="col-lg-12">
                <?php if (have_posts()) : the_post();
                    the_content();
                endif; ?>
            </div>
        </div>
    </div>
<?php }
?>
<?php get_footer(); ?>