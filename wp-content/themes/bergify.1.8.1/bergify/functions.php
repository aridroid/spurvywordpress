<?php

if ( ! function_exists( 'bergify_support' ) ) :
	function bergify_support() {
		// Make theme available for translation.
		load_theme_textdomain( 'bergify' );
		if ( ! 'bergify' === wp_get_theme()->get( 'TextDomain' ) ) {
			load_theme_textdomain( wp_get_theme()->get( 'TextDomain' ) );
		}
		// Alignwide and alignfull classes in the block editor.
		add_theme_support( 'align-wide' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add support for post thumbnails.
		add_theme_support( 'post-thumbnails' );

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Enqueue editor styles.
		add_editor_style( array( '/assets/ponyfill.css' ) );
	}
endif;
add_action( 'after_setup_theme', 'bergify_support' );

/* Enqueue styles */
function bergify_scripts() {
	wp_enqueue_style( 'bergify-ponyfill', get_template_directory_uri() . '/assets/ponyfill.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'bergify_scripts' );

/* Block Styles */
require get_template_directory() . '/inc/block-styles.php';

/* Block Patterns */
require get_template_directory() . '/inc/block-patterns.php';

/* Contact Form 7 - Remove styles */
add_filter( 'wpcf7_load_css', '__return_false' );

/* PRO Theme Banner */
function pro_theme_banner() {
	if ( is_admin() ) {
	  echo '<div class="notice notice-info is-dismissible"> 
	  			<p>Upgrade to Bergify PRO and get 60+ ready-to-use page sections and 20+ full-page designs. Support and updates for 1 year included.</p>
	  			<p><a href="https://www.bergify.com/pro/" target="_blank" class="button button-primary">Explore Bergify PRO</a></p>
			</div>';
	}
}
add_action( 'admin_notices', 'pro_theme_banner' );
