<?php
/**
 * Custom enqueue scripts
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Enqueue scripts and styles.
 */
function blankslate_scripts() {

	// Bootstrap 5
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true ); 

	// Font awesome 4
	wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/css/fontawesome.min.css', array(), filemtime( get_stylesheet_directory() . '/css/fontawesome.min.css' ) );

	// Slick.js 
	wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/css/slick.min.css', array(), filemtime( get_stylesheet_directory() . '/css/slick.min.css' ) );
	wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/js/slick.min.js', array(), filemtime( get_stylesheet_directory() . '/js/slick.min.js' ) );

	// AOS Library
    wp_enqueue_style('aos', get_stylesheet_directory_uri() . '/css/aos.css', [], null);
    wp_enqueue_script('aos', get_stylesheet_directory_uri() . '/js/aos.js', [], null, true);

	// Custom stylesheet 
	wp_enqueue_style( 'custom', get_stylesheet_directory_uri() . '/css/custom.css', array(), filemtime( get_stylesheet_directory() . '/css/custom.css' ) );

	// Custom JS
	wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), filemtime(get_stylesheet_directory() . '/js/custom.js'), true);
    
	
}
add_action( 'wp_enqueue_scripts', 'blankslate_scripts' );