<?php get_header(); ?>

<main>
    <?php
    $tituloActual = get_the_title();
    $titulo = strtolower($tituloActual);
    switch ($titulo) {
        case 'nosotros':
            get_template_part('parts/pag', 'nosotros');
        break;
        case 'contacto':
            get_template_part('parts/pag', 'contacto');
            break;
        case 'reservas':
            get_template_part('parts/pag', 'reservas');
            break;
        case 'imagenes':
            get_template_part('parts/pag', 'imagenes');
            break;
        case 'afiliate':
            get_template_part('parts/pag', 'afiliate');
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
           <?php if (have_posts()): while (have_posts()):  the_post();
          $imagen = get_the_post_thumbnail_url();
          $titulo = get_the_title();
          $contenido = get_the_content();
          endwhile;
        endif;
?>
        </div>
        <img  src="<?= $imagen?>">
    </div>
<?php }
?>
<?php get_footer(); ?>