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
        <img src="<?= getIMG('banner_encabezado.jpg');?>" alt="banner" />
      </section>
      <!-- NAVEGADOR -->
      <section class="cabure-navegador">
        <div class="container-fluid">
          <div class="row text-center">
            <div class="col-lg-12">
              <?php
              /*
                Obtenemos el menu definido en functions.php y agregamos una clase padre.
                https://developer.wordpress.org/reference/functions/wp_nav_menu/
              */
              wp_nav_menu(
                array(
                  'theme_location'=> 'menu_principal',
                  'menu_class' => 'cabure-navegador-lista')
                );
              ?>
            </div>
          </div>
        </div>
      </section>
    </header>