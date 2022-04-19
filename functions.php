<?php

/* -------------------------------------------------------------------------- */
/*                               Theme support                               */
/* -------------------------------------------------------------------------- */
add_theme_support( 'title-tag' ); 
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo', array(
    'height'               => 100,
    'width'                => 400,
    'flex-height'          => true,
    'flex-width'           => true,
));

/* -------------------------------------------------------------------------- */
/*                                Register Menu                               */
/* -------------------------------------------------------------------------- */
function avano_custom_menu() {
  register_nav_menus(
    array(
      'main' => __( 'Main Navigation' )
    )
  );
}
add_action( 'init', 'avano_custom_menu' );


/* -------------------------------------------------------------------------- */
/*                         Enqueue scripts and styles                         */
/* -------------------------------------------------------------------------- */
function add_theme_scripts() {

    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/styles/main.css', array(), '', 'all');
    
    wp_enqueue_script("jquery");
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/styles/bootstrap/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
