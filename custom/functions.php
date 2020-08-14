<?php

function theme_styles() {
 
  wp_enqueue_style( 'bootstrap_css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style( 'aos_css', get_stylesheet_directory_uri() . '/css/aos.css' );
  wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() . '/style.css' );

}
   
add_action( 'wp_enqueue_scripts', 'theme_styles');
   
function theme_js() {
   
  global $wp_scripts;
  
  wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/js/jquery-3.5.1.js"' ); 
  wp_enqueue_script( 'bootstrap_js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js' );
  wp_enqueue_script( 'popper_js', get_stylesheet_directory_uri() . '/js/popper.min.js' );
  wp_enqueue_script( 'scroll_js', get_stylesheet_directory_uri() . '/js/smooth-scroll.min.js"' ); 
  wp_enqueue_script( 'aos_js', get_stylesheet_directory_uri() . '/js/aos.js' );
  
}
   
add_action( 'wp_enqueue_scripts', 'theme_js');

// Etiqueta de titulo 
add_theme_support( 'title-tag' );


?>
