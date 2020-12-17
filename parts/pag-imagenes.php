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
					<?php $galerias = obtenerElementoWidget('Siatrasag_Galeria');
						//600x300
						$color = true;
					    $count = 0;
						$estilo = '';
					?>
					<?php foreach($galerias as $galeria):
						if($color){
							$estilo = 'cabure-galeria-titulo-azul';
						}else{
							$estilo = 'cabure-galeria-titulo-verde';
						}
						$color = !$color;
						
						$count = ($count >= 1)? 0 : $count;
					?>
					<div class="col-lg-6">
                        <div class="cabure_galeria">
                            <div class="<?=$estilo;?>"><?= $galeria->title;?></div>
							<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<?php foreach($galeria->ids as $img => $id): 
										$claseCss = ($count == 0)? 'class="carousel-item active"' : 'class="carousel-item"';
									 	//$imagen = wp_get_attachment_image($id, $galeria->size);
									 	//768x576
									 	$imagen = wp_get_attachment_image($id,['700','500']);
									?>
										<div <?=$claseCss?>> <?=$imagen;?> </div>
									<?php $count++; endforeach; ?>
								</div>
							</div>
                        </div>
                    </div>
					<?php endforeach; ?>
                </div>
<!--                 <div class="col-lg-12 cabure-imagenes-verMas">
                    <button class="cabure-home-verMas-btn">
                    + + + + + <span>&nbsp;&nbsp;Ver más galerías&nbsp;&nbsp;</span> + + + + +
                    </button>
                </div> -->
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>