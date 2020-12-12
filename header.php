<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- HEADER -->
    <header>
      <!-- BANNER -->
      <section class="cabure-banner">
        <img src="<?= getIMG('banner-siatrasag.jpg');?>" alt="banner" />
      </section>
      <!-- NAVEGADOR -->

      <div class="boton">
        <p id="btn-responsive" class="p-2 text-center">MENÚ</p>
      </div>
      <section class="cabure-navegador" id="menu">
        <div class="container-fluid">
          <div class="row text-center">
            <div class="col-lg-12">
              
              <?php
              /*
                Obtenemos el menu definido en functions.php y agregamos una clase padre.
                https://developer.wordpress.org/reference/functions/wp_nav_menu/
              */
              
              $activeNosotros = (is_page('nosotros'))? 'class="current_page_item"': '';
              $activeInicio = (is_page('inicio'))? 'class="current_page_item"': '';

              $urlNosotros = home_url().'/nosotros';
              $menu_li = ' <li '.$activeInicio.'><a href="'.home_url().'">Inicio</a></li> 
                           <li '.$activeNosotros.'><a href="'.$urlNosotros.'">Nosotros</a>
                              <ul class="sub-menu">
                                <li><a href="'.$urlNosotros.'/#mvv">MISION,VISION,VALORES</a></li>
                                <li><a href="'.$urlNosotros.'/#historia">HISTORIA</a></li>
                                <li><a href="'.$urlNosotros.'/#autoridadesYEstatutos">ESTATUTOS</a></li>
                                <li><a href="'.$urlNosotros.'/#autoridadesYEstatutos">COMISION DIRECTIVA</a></li>
                              </ul> </li>';
              wp_nav_menu(
                array(
                  'theme_location'=> 'menu_principal',
                  'menu_class' => 'cabure-navegador-lista',
                  'items_wrap' => '<ul id="%1$s" class="%2$s">'.$menu_li.'%3$s</ul>')
                );
              ?>
            </div>
          </div>
        </div>
      </section>
    </header>