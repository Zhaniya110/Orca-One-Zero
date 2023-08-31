<?php 
add_action('wp_enqueue_scripts', 'orcaonezero_styles' );
/**
 * Orcaonezero's functions and definitions
 *
 * @package orcaonezero
 * @since Orcaonezero 1.0
 */

/**
 * First, let's set the maximum content width based on the theme's
 * design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 800; /* pixels */
}


if ( ! function_exists( 'orcaonezero_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various
	 * WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme
	 * hook, which runs before the init hook. The init hook is too late
	 * for some features, such as indicating support post thumbnails.
	 */
	function orcaonezero_setup() {

		/**
		 * Make theme available for translation.
		 * Translations can be placed in the /languages/ directory.
		 */
		

		/**
		 * Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add support for two custom navigation menus.
		 */
		register_nav_menus( array(
			'primary'   => __( 'Primary Menu', 'orcaonezero' ),
			'secondary' => __( 'Secondary Menu', 'orcaonezero' ),
			
		) );

		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
/**
 * Enable dynamic title
 */
        add_theme_support('title-tag');
	}
endif; // myfirsttheme_setup
add_action( 'after_setup_theme', 'orcaonezero_setup' );

function orcaonezero_styles(){
	wp_enqueue_style( 'mainstyle', get_template_directory_uri() . '/src/main.css', array(), '1', 'all' );
	wp_enqueue_style( 'tailwind',get_template_directory_uri() . '/src/output.css', array(), '3.3.3', 'all' );
    wp_enqueue_script( 'tailwind',get_template_directory_uri() . '/src/cdn.tailwindcss.com_3.3.3', array(), '3.3.3', true );
    
    wp_enqueue_script( 'flowbite',get_template_directory_uri() . '/src/flowbite.min.js', array(), '3.3.3', true );
    wp_enqueue_style( 'flowbite', get_template_directory_uri() . '/src/flowbite.min.css', array(), '3.3.3', 'all' );
}


function load_theme_language() {
	load_theme_textdomain( 'orcaonezero', get_template_directory() . '/languages' );
}

include('customizer.php');
add_action( 'customize_preview_init', 'cd_customizer' );
function cd_customizer() {
	wp_enqueue_script('cd_customizer',get_template_directory_uri() . '/customizer.js', array( 'jquery','customize-preview' ),'1', true);
}

add_theme_support( 'customize-selective-refresh-widgets' );