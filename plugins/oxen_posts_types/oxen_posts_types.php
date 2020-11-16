<?php 
/*
    Plugin Name: Oxen Perú - Post Types
    Plugin URI:
    Description: Añade Post Types al sitio Oxen Perú
    Version: 1.0.0
    Author: Sebastian Manuel Pajes Leon
    Author URI: https://www.upwork.com/o/profiles/users/~01acae63145b36af76/
    Text Domain: oxen
*/

if(!defined('ABSPATH')) die();
// Registrar Custom Post Type
function oxen_segmentos_post_type()
{

    $labels = array(
        'name'                  => _x('segmentos', 'Post Type General Name', 'oxen'),
        'singular_name'         => _x('Segmentos', 'Post Type Singular Name', 'oxen'),
        'menu_name'             => __('segmentos', 'oxen'),
        'name_admin_bar'        => __('Segmentos', 'oxen'),
        'archives'              => __('Archivo', 'oxen'),
        'attributes'            => __('Atributos', 'oxen'),
        'parent_item_colon'     => __('Segmentos Padre', 'oxen'),
        'all_items'             => __('Todas Las segmentos', 'oxen'),
        'add_new_item'          => __('Agregar Segmentos', 'oxen'),
        'add_new'               => __('Agregar Segmentos', 'oxen'),
        'new_item'              => __('Nueva Segmentos', 'oxen'),
        'edit_item'             => __('Editar Segmentos', 'oxen'),
        'update_item'           => __('Actualizar Segmentos', 'oxen'),
        'view_item'             => __('Ver Segmentos', 'oxen'),
        'view_items'            => __('Ver segmentos', 'oxen'),
        'search_items'          => __('Buscar Segmentos', 'oxen'),
        'not_found'             => __('No Encontrado', 'oxen'),
        'not_found_in_trash'    => __('No Encontrado en Papelera', 'oxen'),
        'featured_image'        => __('Imagen Destacada', 'oxen'),
        'set_featured_image'    => __('Guardar Imagen destacada', 'oxen'),
        'remove_featured_image' => __('Eliminar Imagen destacada', 'oxen'),
        'use_featured_image'    => __('Utilizar como Imagen Destacada', 'oxen'),
        'insert_into_item'      => __('Insertar en Segmentos', 'oxen'),
        'uploaded_to_this_item' => __('Agregado en Segmentos', 'oxen'),
        'items_list'            => __('Lista de segmentos', 'oxen'),
        'items_list_navigation' => __('Navegación de segmentos', 'oxen'),
        'filter_items_list'     => __('Filtrar segmentos', 'oxen'),
    );
    $args = array(
        'label'                 => __('Segmentos', 'oxen'),
        'description'           => __('segmentos para el Sitio Web', 'oxen'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => true, //true=posts, false=paginas
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('oxen_segmentos', $args);
}
add_action('init', 'oxen_segmentos_post_type', 0);
//ofertas
function oxen_oferta_post_type()
{

    $labels = array(
        'name'                  => _x('oferta', 'Post Type General Name', 'oxen'),
        'singular_name'         => _x('oferta', 'Post Type Singular Name', 'oxen'),
        'menu_name'             => __('oferta', 'oxen'),
        'name_admin_bar'        => __('oferta', 'oxen'),
        'archives'              => __('Archivo', 'oxen'),
        'attributes'            => __('Atributos', 'oxen'),
        'parent_item_colon'     => __('oferta Padre', 'oxen'),
        'all_items'             => __('Todas Las oferta', 'oxen'),
        'add_new_item'          => __('Agregar oferta', 'oxen'),
        'add_new'               => __('Agregar oferta', 'oxen'),
        'new_item'              => __('Nueva oferta', 'oxen'),
        'edit_item'             => __('Editar oferta', 'oxen'),
        'update_item'           => __('Actualizar oferta', 'oxen'),
        'view_item'             => __('Ver oferta', 'oxen'),
        'view_items'            => __('Ver oferta', 'oxen'),
        'search_items'          => __('Buscar oferta', 'oxen'),
        'not_found'             => __('No Encontrado', 'oxen'),
        'not_found_in_trash'    => __('No Encontrado en Papelera', 'oxen'),
        'featured_image'        => __('Imagen Destacada', 'oxen'),
        'set_featured_image'    => __('Guardar Imagen destacada', 'oxen'),
        'remove_featured_image' => __('Eliminar Imagen destacada', 'oxen'),
        'use_featured_image'    => __('Utilizar como Imagen Destacada', 'oxen'),
        'insert_into_item'      => __('Insertar en oferta', 'oxen'),
        'uploaded_to_this_item' => __('Agregado en oferta', 'oxen'),
        'items_list'            => __('Lista de oferta', 'oxen'),
        'items_list_navigation' => __('Navegación de oferta', 'oxen'),
        'filter_items_list'     => __('Filtrar oferta', 'oxen'),
    );
    $args = array(
        'label'                 => __('oferta', 'oxen'),
        'description'           => __('oferta para el Sitio Web', 'oxen'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => true, //true=posts, false=paginas
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('oxen_oferta', $args);
}
add_action('init', 'oxen_oferta_post_type', 0);

