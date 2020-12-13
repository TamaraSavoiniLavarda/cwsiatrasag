<?php
  get_header();
/*
  Formas de mostrar algo en php:
  <?php echo 'hola mundo'; ?>
  <?php echo('hola mundo'); ?>
  <?='hola mundo'; ?>
*/
  
?>
<main>
    <!-- SLIDER -->
    <section class="cabure-slider">
      <div class="cabure-slider-img">
        <?php
            echo do_shortcode('[smartslider3 slider="4"]');
            
        ?>
      </div>
    </section>
    <!-- MISION, VISION, VALORES -->
    <section class="cabure-mision" id="mvv">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 cabure-mision-card">
                    <div class="cabure-mision-titulo">
                        <img src="<?=getIMG('mision.jpg')?>" alt="mision">
                    </div>
                    <div class="cabure-mision-contenido">
                        <?php
                        dynamic_sidebar('id-mision-contenido');
                        
                        ?>
                    </div>
                </div>
                <div class="col-lg-4 cabure-mision-card">
                    <div class="cabure-mision-titulo">
                        <img src="<?=getIMG('vision.jpg')?>" alt="vision">
                    </div>
                    <div class="cabure-mision-contenido">
                        <?php
                        dynamic_sidebar('id-vision-contenido');
                        
                        ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cabure-mision-titulo">
                        <img src="<?=getIMG('valores.jpg')?>" alt="valores">
                    </div>
                    <div class="cabure-mision-contenido">
                        <?php
                        dynamic_sidebar('id-valores-contenido');
                        
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HISTORIA -->
    <section class="cabure-historia" id="historia">
        <div class="cabure-historia-titulo">
            <img src="<?=getIMG('historia.png')?>" alt="historia">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="cabure-historia-parrafo">
                        <?php dynamic_sidebar('id-historia-parrafo-1');?>
                        <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dicta maiores dolorum, labore molestiae sapiente doloremque placeat dolores nostrum odio commodi sint accusantium, adipisci harum nisi natus facere veritatis facilis. Quam unde excepturi ab vel consectetur facere cum ipsam voluptatem et fugit obcaecati omnis, nobis quod ea, voluptas aspernatur quia. -->
                    </div>
                    <div class="cabure-historia-parrafo">
                        <?php dynamic_sidebar('id-historia-parrafo-2');?>
                        <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ipsa nihil facilis sequi dolores veniam voluptates recusandae harum maxime quia nemo architecto cum totam, dicta perspiciatis at quos, vitae, ducimus unde. Consequuntur quas nesciunt maxime rem corporis excepturi, praesentium amet accusantium, adipisci, nemo hic consequatur vero modi optio. Harum, expedita eligendi a qui culpa quae repellat voluptatum illo quos saepe totam ipsa voluptates, impedit labore! Architecto repudiandae iure ducimus nihil. -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cabure-historia-img">
                        <?php dynamic_sidebar('id-historia-imagen-1');?>
                        <!-- <img src="<?=getIMG('historia-img.png');?>" alt="foto"> -->
                    </div>
                    <div class="cabure-historia-img">
                        <?php dynamic_sidebar('id-historia-imagen-2');?>
                        <!-- <img src="<?=getIMG('historia-img.png')?>" alt="foto"> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cabure-historia-parrafo">
                        <?php dynamic_sidebar('id-historia-parrafo-3');?>
                        <!-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate, non delectus suscipit dolor molestiae tempore magni nihil dignissimos, ab quam voluptatem blanditiis natus ipsum quo rem et dolorem? Ex rerum ab, nostrum sequi voluptatibus obcaecati maxime provident! Et nam temporibus vel sit natus nemo ullam adipisci, necessitatibus doloribus perspiciatis expedita accusantium molestias neque totam laudantium inventore corporis quas. Ipsa corrupti eligendi eveniet suscipit, reprehenderit dignissimos mollitia doloribus itaque. Vitae, eaque! -->
                    </div>
                    <div class="cabure-historia-parrafo">
                        <?php dynamic_sidebar('id-historia-parrafo-4');?>
                        <!-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate, non delectus suscipit dolor molestiae tempore magni nihil dignissimos, ab quam voluptatem blanditiis natus ipsum quo rem et dolorem? Ex rerum ab, nostrum sequi voluptatibus obcaecati maxime provident! Et nam temporibus vel sit natus nemo ullam adipisci, necessitatibus doloribus perspiciatis expedita accusantium molestias neque totam laudantium inventore corporis quas. Ipsa corrupti eligendi eveniet suscipit, reprehenderit dignissimos mollitia doloribus itaque. Vitae, eaque! -->
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-lg-4">
                <div class="cabure-historia-parrafo">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ipsa nihil facilis sequi dolores veniam voluptates recusandae harum maxime quia nemo architecto cum totam, dicta perspiciatis at quos, vitae, ducimus unde. Consequuntur quas nesciunt maxime rem corporis excepturi, praesentium amet accusantium, adipisci, nemo hic consequatur vero modi optio. Harum, expedita eligendi a qui culpa quae repellat voluptatum illo quos saepe totam ipsa voluptates, impedit labore! Architecto repudiandae iure ducimus nihil.
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cabure-historia-img">
                    <img src="<?=getIMG('historia-img.png')?>" alt="foto">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cabure-historia-parrafo">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, laudantium iure incidunt quis corporis odio alias dolorem eaque neque ratione atque, voluptatem, nesciunt exercitationem illo rem aliquid laborum molestias veritatis eveniet fuga? Cupiditate blanditiis aperiam et similique, a sunt quas. Provident tenetur animi cum, dolor dolores expedita temporibus assumenda. Impedit porro blanditiis quae dolor, sequi corrupti, fuga harum facere ex natus accusamus excepturi quaerat consectetur consequatur quo! At delectus officia corrupti eum quia eligendi dolore iusto facilis velit, unde ut.
                </div>
            </div>
        </div> -->
    </section>
    <!-- AUTORIDADES Y ESTATUTOS -->
    <section class="cabure-autoridades-estatutos" id="autoridadesYEstatutos">
        <div class="cabure-contenedor-chico__mod">
            <div class="container-fluid">
                <div class="row">
                    <div class="cabure-autoridades-titulo">
                        <img src="<?=getIMG('autoridades.png')?>" alt="autoridades">
                    </div>
                    <div class="col-lg-4 cabure-autoridades">
                        <div class="cabure-autoridades-titulo-txt">
                            ///<span> Autoridades </span>///
                        </div>
                    <?php
                        dynamic_sidebar('id-autoridades-contenido');
                        
                        ?>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5">
                        <div class="cabure-estatutos">
                            <div class="cabure-estatutos-titulo">
                                <img src="<?=getIMG('estatutos.png')?>" alt="estatutos">
                            </div>
                            <div class="cabure-estatutos-contenido">
                                <?php dynamic_sidebar('id-estatutos-contenido'); ?>
                            </div>
                            <div class="cabure-estatutos-verMas">
                                <button id="verMasEstatutos">ver más</button>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</main>
<?php get_footer(); ?>