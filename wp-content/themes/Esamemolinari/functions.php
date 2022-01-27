<?php 

/**
 * Enqueue our stylesheet and javascript file
 */
function theme_enqueue_styles() {
  $the_theme = wp_get_theme();
  
  wp_enqueue_style('esame-normalize', get_stylesheet_directory_uri() . '/css/normalize.css', array(), $the_theme->get( 'Version' ) );
  wp_enqueue_style('esame-main', get_stylesheet_directory_uri() . '/css/main.css', array(), $the_theme->get( 'Version' ) );
  wp_enqueue_style('esame-bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), $the_theme->get( 'Version' ) );
  wp_enqueue_style('esame-animate', get_stylesheet_directory_uri() . '/css/animate.css', array(), $the_theme->get( 'Version' ) );

  /*
	// Get the theme data.
	$the_theme = wp_get_theme();

	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	// Grab asset urls.
	$theme_styles  = "/css/child-theme{$suffix}.css";
	$theme_scripts = "/js/child-theme{$suffix}.js";

	wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $the_theme->get( 'Version' ) );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . $theme_scripts, array(), $the_theme->get( 'Version' ), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
  */
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
