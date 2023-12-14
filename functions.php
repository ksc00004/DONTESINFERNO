<?php

// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );


// Load in our CSS
function recipe_enqueue_styles() {
  wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' );
  wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/css/styles.css', [], time(), 'all' );
}
add_action( 'wp_enqueue_scripts', 'recipe_enqueue_styles' );

// Load in our JavaScript
function recipe_enqueue_js() {
  wp_enqueue_script( 'bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js', array('jquery'), true);
	//wp_enqueue_script( 'dropdown_js', get_template_directory_uri() . '/js/example.js' );
}
add_action( 'wp_enqueue_scripts', 'recipe_enqueue_js');


// Register Menu Locations
register_nav_menus( [
  'main-menu' => esc_html__( 'Main Menu', 'inferno realms' ),
]);

?>