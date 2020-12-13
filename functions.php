<?php
/*
  Funciones de uso general
*/
function getCSS($filename){return get_template_directory_uri().'/src/css/'.$filename; }
function getJS($filename){return get_template_directory_uri().'/src/js/'.$filename; }
function getIMG($filename){return get_template_directory_uri().'/src/img/'.$filename; }
function getFONTS($filename){return get_template_directory_uri().'/src/fonts/'.$filename; }


// function agregarItemsMenu($items, $args){
//   $historia = home_url().'/#historia';

//     if( $args->theme_location == 'menu_principal' ){
//         $items .= '<li><a href="'.$historia.'"> Historia </a></li>';
//     }
//     return $items;
// }
// add_filter('wp_nav_menu_items', 'agregarItemsMenu', 10, 2);

/*
  Incluyendo Styles al theme.
  https://developer.wordpress.org/reference/functions/wp_enqueue_style/
*/
function web_insertar_style(){
  wp_enqueue_style('reset', getCSS('reset.css') );
  wp_enqueue_style('bootstrap', getCSS('bootstrap.min.css'));
  wp_enqueue_style('style', getCSS('style.css'));
  // wp_enqueue_style('google-fonts1', getFONTS('Roboto-Bold.ttf'), array(), null);
  // wp_enqueue_style('google-fonts2', getFONTS('Roboto-Regular.ttf'), array(), null);
  wp_enqueue_style('font-one', "https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap", false);
}
add_action('wp_enqueue_scripts','web_insertar_style');

/*
  Agrega al body_class el nombre del sitio.
  https://developer.wordpress.org/reference/hooks/body_class/
  
  Para aplicarlo incluir en el body: <body <?php body_class(); ?>>
  https://developer.wordpress.org/reference/functions/body_class/#more-information
*/
function theme_agregarNombreEnBody($classes = array()) {
  // Agrega el slug de la página a la clase del body
  global $post;
  if (is_object($post)) {
      $classes[] = $post->post_type . '-' . $post->post_name;
      $classes[] = $post->post_name;
  }
  return $classes;
}
add_filter('body_class', 'theme_agregarNombreEnBody');

/*
  Incluyendo Scripts al theme.
  https://developer.wordpress.org/reference/functions/wp_enqueue_script/
*/
function web_insertar_js(){
  wp_enqueue_script('bootstrap-js', getJS('bootstrap.min.js'),array('jquery'),true);
  wp_enqueue_script('app-js', getJS('app.js'),array(),true);
}
add_action('wp_enqueue_scripts','web_insertar_js');

/*
  Registrando el/los Menus del sitio.
  https://developer.wordpress.org/reference/functions/register_nav_menus/
*/
register_nav_menus(array(
  'menu_principal' => __('Menu Principal','webBase')
));

/*
  Agregando nuevas medidas para las imagenes.
  https://developer.wordpress.org/reference/functions/add_image_size/
  
  Nota:
  Para eliminarlas se puede utilizar remove_image_size, pero realizarlo solo si se esta
  seguro que en todo el sitio no se van a utilizar las medidas por defecto.
  Tener en cuenta que puede ser una posible utilidad a futuro.
*/
function forzarCropEnDimensiones() {
  add_image_size('medium', get_option('medium_size_w'), get_option('medium_size_h'), true);
  add_image_size('img_novedades', 300, 250, true);
  add_image_size('img_novedades1', 700, 400, true);
}
add_action('after_setup_theme','forzarCropEnDimensiones');

/*
  Agregando o habilitando soportes
  https://developer.wordpress.org/reference/functions/add_theme_support/
  
  Principales:
   + add_theme_support('title-tag'); Habilita wp_title()
   + add_theme_support('post-thumbnails'); Habilita las "imagenes destacadas"
   + add_theme_support('woocommerce'); Indica que el theme es compatible con Woocommerce
*/
function agregarSupports() {
  add_theme_support('title-tag');// Habilita wp_title()
  add_theme_support('post-thumbnails');// Habilita las "imagenes destacadas"
  // add_theme_support('woocommerce');// Indica que el theme es compatible con Woocommerce
}
add_action('after_setup_theme', 'agregarSupports');
/*
  Agregando o habilitando widgets
  https://developer.wordpress.org/reference/functions/register_sidebar/
  
  Para aplicarlo utilizar dynamic_sidebar('id del widget')
*/
function wdCabureweb_widgets_init() {
  // register_sidebar( array(
  //   'name'          => '[Slider]',
  //   'id'            => 'id-custom-slider',
  //   'description'   => 'Ingresar shortcode Smart Slider 3',
  //   'before_widget' => '<section>',
  //   'after_widget'  => '</section>',
  //   'before_title'  => '',
  //   'after_title'   => '',
  // ));
  
  register_sidebar( array(
    'name'          => '[Nosotros] Estatutos',
    'id'            => 'id-estatutos-contenido',
    'description'   => 'Ingresar texto con listado',
    'before_widget' => '<div class="hola">',
    'after_widget'  => '</div>',
    'before_title'  => '<h1 class="hola">',
    'after_title'   => '</h1>',
  ));

  register_sidebar( array(
    'name'          => '[Nosotros] Mision',
    'id'            => 'id-mision-contenido',
    'description'   => 'Ingresar texto',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ));

  register_sidebar( array(
    'name'          => '[Nosotros] Vision',
    'id'            => 'id-vision-contenido',
    'description'   => 'Ingresar texto',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ));

  register_sidebar( array(
    'name'          => '[Nosotros] Valores',
    'id'            => 'id-valores-contenido',
    'description'   => 'Ingresar texto',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ));

  
  register_sidebar( array(
    'name'          => '[Nosotros] Autoridades',
    'id'            => 'id-autoridades-contenido',
    'description'   => 'Ingresar lista con los cargos en negrita.',
    'before_widget' => '<ul class="cabure-autoridades-lista">',
    'after_widget'  => '</ul>',
    'before_title'  => '',
    'after_title'   => '',
  ));

  register_sidebar( array(
    'name'          => '[Nosotros] Historia párrafo 1',
    'id'            => 'id-historia-parrafo-1',
    'description'   => 'Ingresar texto del parrafo 1.',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ));

  register_sidebar( array(
    'name'          => '[Nosotros] Historia párrafo 2',
    'id'            => 'id-historia-parrafo-2',
    'description'   => 'Ingresar texto del parrafo 2.',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ));

  register_sidebar( array(
    'name'          => '[Nosotros] Historia párrafo 3',
    'id'            => 'id-historia-parrafo-3',
    'description'   => 'Ingresar texto del parrafo 3.',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ));

  register_sidebar( array(
    'name'          => '[Nosotros] Historia párrafo 4',
    'id'            => 'id-historia-parrafo-4',
    'description'   => 'Ingresar texto del parrafo 4.',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ));

  register_sidebar( array(
    'name'          => '[Nosotros] Historia imagen 1',
    'id'            => 'id-historia-imagen-1',
    'description'   => 'Ingresar imagen.',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ));

  register_sidebar( array(
    'name'          => '[Nosotros] Historia imagen 2',
    'id'            => 'id-historia-imagen-2',
    'description'   => 'Ingresar imagen.',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ));
  
} add_action( 'widgets_init', 'wdCabureweb_widgets_init' );

function getAllNovedades($query, $columna)
{
  if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
      $postid = get_the_ID();
      $image = get_the_post_thumbnail_url($postid, 'img_novedades');
      $title = get_the_title();
      $permalink = get_the_permalink();
?>
      <div class="col-lg-<?= $columna ?>">
        <div class="cabure-novedades-card text-center">
          <div class="cabure-novedades-card-img">
            <img src="<?= $image ?>" alt="imagen destacada" />
          </div>
          <div class="cabure-novedades-card-contenido">
            <h4><?= $title; ?></h4>
          </div>
          <div class="cabure-novedades-card-verMas mt-3">
            <h5><a href="<?= $permalink ?>">Ver más</a></h5>
          </div>
        </div>
      </div>
    <?php endwhile;
  else : ?>
    <div class="col-lg-<?= $columna ?> mx-auto">
      <div class="alert alert-info text-center">No hay novedades</div>
    </div>
    <?php
  endif;
}



function getHomeNovedades($query, $columna)
{
  if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
      $postid = get_the_ID();
      $image = get_the_post_thumbnail_url();
      $title = get_the_title();
      $excerpt = get_the_excerpt();
      $permalink = get_the_permalink();
      $d = get_the_date('d');
      $m = get_the_date('F');
      $a = get_the_date('Y');
      $fecha = $d . ' ' . 'de' . ' ' . $m . ' ' . 'de' . ' '. $a;
    ?>
    <div class="col-lg-<?= $columna ?> mb-5">
      <div class="cabure-home-card">
        <a href="<?=$permalink?>">
          <div class="cabure-home-img">
            <img src="<?=$image?>" alt="novedad">
            <div class="cabure-home-titulo">
              <?=$title?>
            </div>
          </div>
          <div class="cabure-home-autor">
            <img src="<?=getIMG('foto_perfil_novedades.png')?>" alt="">
            <span> por Siatrasag</span>
            <div class="cabure-home-absolute">
              <?=$fecha?>
            </div>
          </div>
          <div class="cabure-home-contenido">
            <?=$excerpt?>
          </div>
        </a>
      </div>
    </div>
      
    <?php endwhile;
  else : ?>
    <div class="col-lg-<?= $columna ?> mx-auto">
      <div class="alert alert-info text-center">No hay novedades</div>
    </div>
<?php
  endif;
}