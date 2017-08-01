<?php
/**
 * Theme customizer
 *
 * Este archivo sirve para crear las opciones 
 * personalizables que se mostrarán 
 * en el customizer
 *
 * @author	Ricardo Landínez Ospino
 * @package	ryc-tema-base
 * @since	1.0.0
 *
 */

	function ryc_customizer($wp_customize){
	//---------------------------------
	//CABECERA
	//---------------------------------
		$wp_customize->add_section('ryc_header', array(
			'title' => __('Cabecera', 'ryc'),
			'description' => __('Opciones de la cabecera', 'ryc'),
			'priority' => 35
		));

		//logo
		$wp_customize->add_setting('ryc_logo', array(
			'default' => '',
			'sanitize_callback' => 'esc_url_raw'
		));

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize, 'ryc_logo', array(
				'label' => __('Subir logo', 'ryc'),
				'section' => 'ryc_header',
				'settings' => 'ryc_logo'
			)
		));

	//---------------------------------
	//FOOTER
	//---------------------------------
		$wp_customize->add_section('ryc_footer', array(
			'title' => __('Pie de página', 'ryc'),
			'description' => __('Opciones del pie de página', 'ryc'),
			'priority' => 140
		));

		//Copyright
		$default_copyright = '&copy; '.date('Y').' '.get_bloginfo('name');

		$wp_customize->add_setting('ryc_copyright', array(
			'default' => $default_copyright,
			'sanitize_callback' => 'wp_kses'
		));

		$wp_customize->add_control( 'ryc_copyright', array(
				'label' => __('Texto del copyright', 'ryc'),
				'section' => 'ryc_footer',
				'settings' => 'ryc_copyright'
			)
		);

	}

	add_action('customize_register', 'ryc_customizer');

?>