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

add_action( 'enqueue_js', function() {
	wp_enqueue_script('eove-script', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', 'true' );
} );
