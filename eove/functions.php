<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package eove
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'EOVE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function eove_styles() {
	wp_enqueue_style(
		'eove-style',
		get_stylesheet_uri(),
		[],
		EOVE_VERSION
    );
}
add_action( 'wp_enqueue_scripts', 'eove_styles' );

add_action( 'wp_enqueue_scripts', 'add_script');


function add_script(){
	wp_enqueue_script('eove-script', get_bloginfo( 'stylesheet_directory' ) . '/js/scripts.js', array(), '1.0.0', 'true' );

	if ( 'proyectos' == get_post_type() ){
		global $post;
		$post_id = $post->ID;
		$url_proyect = get_field(  'enlace_a_proyecto', $post_id);

	}

	$eove_Public = [
		'url'   => admin_url( 'admin-ajax.php' ),
		'nonce' => wp_create_nonce( 'eove_seg' ),
		'project' => $url_proyect,
	];
	wp_localize_script( 'eove-script', 'eove_Public', $eove_Public );
}