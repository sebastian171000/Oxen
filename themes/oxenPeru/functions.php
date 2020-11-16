<?php
/*Consultas reutilizables */
require get_template_directory() . '/inc/queries.php';
function oxen_setup()
{
    //habilita imagenes destacadas
    add_theme_support('post-thumbnails');
    //agregar imagenes de tamaño personalizado
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('cajas', 400, 375, true);
    add_image_size('mediano', 700, 400, true);
    add_image_size('blog', 966, 644, true);
}
add_action('after_setup_theme', 'oxen_setup');
function oxen_menus()
{
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'oxen')
    ));
}
//init->esta funcion va a correr cuando worpress inicialize 
add_action('init', 'oxen_menus');
//scripts y Styles
function oxen_scripts_styles()
{
    //la hoja de estilo principal
    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), '1.0.0');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
    wp_enqueue_style('swipecss', get_template_directory_uri() . '/css/swiper.min.css', array(), '1.0.0');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefonts','swipecss'), '1.0.0');

    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('swipejs', get_template_directory_uri() . '/js/swiper.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/a0e0d9b7b0.js', array(), '1.0.0');
}
//va acargar hojas de estilo en la parte frontal del sitio web
add_action('wp_enqueue_scripts', 'oxen_scripts_styles');
//tener cuidado con dejar espacios en las comillas

/**imagen hero */
function oxen_hero_imagen()
{
    // obtener id pagina principal
    
    $front_page_id = get_option('page_on_front');
    //obtener id imagen
    $id_imagen = get_field('imagen-hero', $front_page_id);
    //obtener la imagen
    $imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];
    //style css
    wp_register_style('custom', false);
    wp_enqueue_style('custom');
    $imagen_destacada_css = "
    body.home .hero-inicio{
        background-image: url($imagen);
    }
    ";
    wp_add_inline_style('custom', $imagen_destacada_css);
}
add_action('init', 'oxen_hero_imagen');
function oxen_hero_segmentos_imagen()
{
    $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $current_post_id = url_to_postid($url);
    // obtener id pagina principal

    //obtener id imagen
    $id_imagen = get_field('imagen-hero-segmento', $current_post_id);
    //obtener la imagen
    $imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];
    //style css
    wp_register_style('custom-segmento', false);
    wp_enqueue_style('custom-segmento');
    $imagen_destacada_css = "
    .oxen_segmentos-template-default .hero-segmentos{
        background-image: url($imagen);
    }
    ";
    wp_add_inline_style('custom-segmento', $imagen_destacada_css);
}
add_action('init', 'oxen_hero_segmentos_imagen');

?>
