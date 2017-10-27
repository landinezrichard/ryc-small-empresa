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

		//Call to Action text
		$wp_customize->add_setting('ryc_cta_text', array(
			'default' => '¿Estás listo para comenzar con tu proyecto de diseño web? ',
			'sanitize_callback' => 'wp_kses'
		));

		$wp_customize->add_control( 'ryc_cta_text', array(
				'label' => __('Texto del área para el Call to Action', 'ryc'),
				'section' => 'ryc_footer',
				'settings' => 'ryc_cta_text'
			)
		);

		//Call to Action btn text
		$wp_customize->add_setting('ryc_cta_btn_text', array(
			'default' => 'Trabajemos juntos',
			'sanitize_callback' => 'wp_kses'
		));

		$wp_customize->add_control( 'ryc_cta_btn_text', array(
				'label' => __('Texto del botón Call to Action', 'ryc'),
				'section' => 'ryc_footer',
				'settings' => 'ryc_cta_btn_text'
			)
		);

		//Call to Action btn URL
		$wp_customize->add_setting('ryc_cta_btn_url', array(
			'default' => home_url('/contacto'),
			'sanitize_callback' => 'esc_url'
		));

		$wp_customize->add_control( 'ryc_cta_btn_url', array(
				'label' => __('URL del botón Call to Action', 'ryc'),
				'section' => 'ryc_footer',
				'settings' => 'ryc_cta_btn_url'
			)
		);

	}

	add_action('customize_register', 'ryc_customizer');

?>