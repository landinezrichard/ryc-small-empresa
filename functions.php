<?php
/**
 * Funciones
 *
 * Este es el archivo de funciones, desde aquí 
 * se maneja toda la funcionalidad adicional 
 * del tema
 *
 * @author	Ricardo Landínez Ospino
 * @package	ryc-tema-base
 * @since	1.0.0
 *
 */

	//Definir ruta al tema
	define('THEMEROOT', get_stylesheet_directory_uri() );

	//Definir la ruta a la carpeta de imágenes
	define('IMAGES', THEMEROOT.'/img');

	//Deshabilitar la edición de archivos
	define('DISALLOW_FILE_EDIT', true);

	// Set content width value based on the theme's design
	if ( ! isset( $content_width ) )
		$content_width = 1000;

	if ( ! function_exists('ryc_theme_features') ) {

	// Register Theme Features
	function ryc_theme_features()  {

		// Add theme support for Automatic Feed Links
		add_theme_support( 'automatic-feed-links' );

		// Add theme support for Post Formats
		// add_theme_support( 'post-formats', array( 'video' ) );

		// Add theme support for Featured Images
		add_theme_support( 'post-thumbnails' );

		// Add theme support for Custom Background
		$background_args = array(
			'default-color'          => '#ffffff',
			'default-image'          => '',
			'default-repeat'         => '',
			'default-position-x'     => '',
			'wp-head-callback'       => '_custom_background_cb',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
		);
		add_theme_support( 'custom-background', $background_args );

		// Add theme support for HTML5 Semantic Markup
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

		// Add theme support for document Title tag
		add_theme_support( 'title-tag' );

		// Add theme support for custom CSS in the TinyMCE visual editor
		add_editor_style( 'editor-style.css' );

		// Add theme support for Translation
		load_theme_textdomain( 'ryc', get_template_directory() . '/language' );
	}
	add_action( 'after_setup_theme', 'ryc_theme_features' );

	}

	//Registro y carga de scripts y CSS
	require_once('/functions/scripts-stylesheets.php');

	//Registro de menus
	require_once('/functions/menus.php');
	
	//Registro areas widgets.
	require_once('/functions/sidebars.php');

	//Creación Opciones del Personalizador
	require_once('/functions/theme-customizer.php');

	//habilitar extracto en las paginas
	function ryc_add_excerpts_to_pages(){
		add_post_type_support('page', 'excerpt');
	}

	add_action('init','ryc_add_excerpts_to_pages');


	//utilidad crear metaboxes
	require_once('/metaboxes/meta_box.php');

	/*Home Metaboxes*/
	require_once('/functions/home-metaboxes.php');

	/*Servicios Metaboxes*/
	require_once('/functions/servicios-metaboxes.php');

	/*Proyectos Metaboxes*/
	require_once('/functions/proyecto-metaboxes.php');

?>