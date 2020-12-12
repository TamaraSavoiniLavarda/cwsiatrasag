<?php get_header();?>
<!-- PAGE INDEX -->
<main>
<div class="container">
    <div class="row">
        <?php if (have_posts()): the_post(); ?>
            <div class="col-lg-12"> <h1><?=get_the_title();?></h1> </div>
            <div class="col-lg-12">
                <?php
                    $imagen = get_the_post_thumbnail_url();
                    echo ( $imagen != "" )? '<img src="'.$imagen.'" alt="siatrasag">' : '';
                    // isset verifica que existe y que contenga algo ;
                    
                    echo get_the_content();
                ?>
            </div>
        </div>
        <?php else: ?>
            <div class="alert alert-info"> Esta publicacion no esta disponible </div>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>