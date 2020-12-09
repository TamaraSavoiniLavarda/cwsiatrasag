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
  wp_enqueue_style('google-fonts1', 'Roboto-Bold.ttf', array(), null);
  wp_enqueue_style('google-fonts2', 'Roboto-Regular.ttf', array(), null);
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
} add_action( 'widgets_init', 'wdCabureweb_widgets_init' );
/*
  Agregando nuevas funcionalidades que tracienden de una configuracion general.
*/
include 'inc/main.php';