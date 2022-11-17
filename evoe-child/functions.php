<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package evoechildtheme
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'EVOECHILDTHEME_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function evoechildtheme_styles() {
	wp_enqueue_style(
		'evoechildtheme-style',
		get_stylesheet_uri(),
		[],
		EVOECHILDTHEME_VERSION
    );
}
add_action( 'wp_enqueue_scripts', 'evoechildtheme_styles' );
