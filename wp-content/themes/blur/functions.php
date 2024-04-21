<?php
/**
 * Blur functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blur
 * @since Blur 1.0
 */


if ( ! function_exists( 'blur_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Blur 1.0
	 *
	 * @return void
	 */
	function blur_support() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		add_theme_support( 'responsive-embeds' );
		

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		//define
		define( 'BLUR_VERSION', '1.0.0' );
	    define( 'BLUR_DEBUG', defined( 'WP_DEBUG' ) && WP_DEBUG === true );
	    define( 'BLUR_DIR', trailingslashit( get_template_directory() ) );
	    define( 'BLUR_URL', trailingslashit( get_template_directory_uri() ) );

	}

endif;

add_action( 'after_setup_theme', 'blur_support' );

if ( ! function_exists( 'blur_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Blur 1.0
	 *
	 * @return void
	 */
	function blur_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'blur-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'blur-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'blur_styles' );


// Add block patterns
require get_template_directory() . '/inc/block-pattern.php';

// Add block Style
require get_template_directory() . '/inc/block-style.php';

//theme option panel
require get_template_directory() . '/theme-option/theme-option.php';