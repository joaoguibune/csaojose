<?php

/**************************************
 *  THEME SUPORT
 **************************************/
function add_suport_theme(){
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme','add_suport_theme');

/**************************************
 * Registro Menu Personalizado
 **************************************/
add_theme_support('menus');
register_nav_menus( array(
    'primary' => __( 'Menu header', 'menu-header' ),
) );

/**************************************
 *  SCRIPTS / CSS
 **************************************/
function csaojose_scripts() {
  // Carregando CSS header
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  // Carregando Scripts header
  wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery') );

  //Carregando no footer
  //wp_enqueue_script('functions-js', get_template_directory_uri().'/assets/js/functions.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'csaojose_scripts' );
/**************************************
 * Registro Custom Post type Slider
 **************************************/
add_action('init', 'slider_registrer');
function slider_registrer(){
     $labels = array(
        'name' => _x('Slider', 'post type general name'),
        'singular_name' => _x('Slider', 'post type singular name'),
        'add_new' => _x('Adicionar slider', 'slider'),
        'add_new_item' => __('Adicionar slider'),
        'edit_item' => __('Editar slider'),
        'new_item' => __('Novo slider'),
        'view_item' => __('Ver slider'),
        'search_items' => __('Procurar slider'),
        'not_found' =>  __('Nada encontrado'),
        'not_found_in_trash' => __('Nada encontrado no lixo'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 6,
        'supports' => array('title','thumbnail'),
      );
    register_post_type('slider',$args);
}
/**************************************
 * Registro Custom Post type Serviços
 **************************************/
add_action('init', 'destaques_registrer');
function destaques_registrer(){
     $labels = array(
        'name' => _x('Destaques', 'post type general name'),
        'singular_name' => _x('Destaques', 'post type singular name'),
        'add_new' => _x('Adicionar destaque', 'destaque'),
        'add_new_item' => __('Adicionar destaque'),
        'edit_item' => __('Editar destaque'),
        'new_item' => __('Novo destaque'),
        'view_item' => __('Ver destaque'),
        'search_items' => __('Procurar destaque'),
        'not_found' =>  __('Nada encontrado'),
        'not_found_in_trash' => __('Nada encontrado no lixo'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-star-filled',
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug'=>'servicos'),
        'menu_position' => 6,
        'supports' => array('title','thumbnail'),
      );
    register_post_type('destaques',$args);
}
