<?php
/**
 * Child theme's functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty_Twenty_One_Child
 */

/**
 * Set up child theme's textdomain.
 *
 * Declare textdomain for this child theme.
 * Translations can be added to the /languages/ directory.
 */
function twentytwentyonechild_theme_setup() {
	load_child_theme_textdomain( 'twentytwentyonechild', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'twentytwentyonechild_theme_setup' );

/**
 * Enqueue scripts and styles.
 *
 * @return void
 */
function twentytwentyone_child_styles() {
	wp_enqueue_style(
		'twenty-twenty-one-child-style',
		get_stylesheet_uri(),
		array( 'twenty-twenty-one-style' ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'twentytwentyone_child_styles' );
