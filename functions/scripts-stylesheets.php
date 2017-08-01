<?php
/**
 * Scripts stylesheets
 *
 * Este archivo sirve para cargar los archivos 
 * CSS y Javascript necesarios para el 
 * funcionamiento del tema
 *
 * @author	Ricardo Landínez Ospino
 * @package	ryc-tema-base
 * @since	1.0.0
 *
 */

	//CSS
	function ryc_load_styles() {
		wp_register_style( 
			'font-lato',
			'http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
			'',
			'',
			'all'
		);

		wp_register_style( 
			'theme-style',
			get_stylesheet_uri(),
			array('font-lato'),
			'1.0.0',
			'all'
		);

		wp_enqueue_style( 'theme-style' );
	}

	add_action('wp_enqueue_scripts', 'ryc_load_styles');

	//JavaScript
	function ryc_load_scripts() {

		wp_register_script( 
			'rem',
			THEMEROOT . '/js/rem.min.js',
			array('jquery'),
			'1.3.2',
			true
		);

		wp_register_script( 
			'theme-scripts',
			THEMEROOT . '/js/functions.js',
			array('jquery'),
			'1.0',
			true
		);

		wp_register_script( 
			'flexslider',
			THEMEROOT . '/js/jquery.flexslider-min.js',
			array('jquery'),
			'2.4.0',
			true
		);

		wp_enqueue_script( 'rem' );
		wp_enqueue_script( 'theme-scripts' );

		if( is_front_page() ){
			wp_enqueue_script( 'flexslider' );
		}
	}

	add_action('wp_enqueue_scripts', 'ryc_load_scripts');

	//JavaScript FOOTER
	function ryc_footer_scripts() {

		//scripts para la front-page
		if( is_front_page() ){ ?>
			<script>
				jQuery('document').ready(function($){
				
					$('.flexslider').flexslider({
						selector: ".slides > .testimonio",
						animation: "slide",
						controlNav: false,
						directionNav: true,
						prevText: "Anterior",
						nextText: "Siguiente", 
					});
				
				});
			</script>
		<?php
		}
		
	}

	add_action('wp_footer', 'ryc_footer_scripts');

?>