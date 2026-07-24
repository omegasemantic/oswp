<?php
/**
 * Stijl functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Stijl
 * @since Stijl 1.0
 */

// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'stijl_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since Stijl 1.0
	 * @return void
	 */
	function stijl_editor_style() {
		add_editor_style( 'assets/css/editor-style.css' );
	}
endif;
add_action( 'after_setup_theme', 'stijl_editor_style' );

if ( ! function_exists( 'stijl_styles' ) ) :
	/**
	 * Enqueue styles.
	 *
	 * @since Stijl 1.0
	 * @return void
	 */
	function stijl_styles() {
		// Register theme stylesheet.
		wp_register_style(
			'stijl-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'stijl-style' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'stijl_styles' );