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

	//---------------------------------
	//SECCIÓN COLORES
	//---------------------------------

		//Color destacado
		$wp_customize->add_setting('ryc_color_destacado', array(
			'default' => '#50C5AB',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			'ryc_color_destacado', array(
				'label' => __('Color destacado', 'ryc'),
				'section' => 'colors',
				'settings' => 'ryc_color_destacado'
			)
		));

	}

	add_action('customize_register', 'ryc_customizer');

	function porcentaje($numero, $porcentaje){
		return ( ($numero*$porcentaje)/100 );
	}

	//Oscurecer un color hexadecimal
	function oscurecerColor($color, $cant){
		$colores_rgb = array();

		for($i = 0; $i < 3; $i++){
			//extraer cada color (rojo, verde,azul)
			$colores_rgb[$i] = substr($color,2*$i+1,2);

			//convertir a enteros los string, que tengo en hexadecimal
			$colores_rgb[$i] = hexdec($colores_rgb[$i]);

			$intporcentaje = round( porcentaje($colores_rgb[$i], $cant) );

			//verifico que no quede como negativo y resto
			if($colores_rgb[$i]-$intporcentaje >= 0) $colores_rgb[$i] = $colores_rgb[$i]-$intporcentaje;

			//convertir a hexadecimal
			$colores_rgb[$i] = dechex( $colores_rgb[$i] );

			//voy a validar que los string hexadecimales tengan dos caracteres
			if( strlen( $colores_rgb[$i] )<2 ) $colores_rgb[$i] = "0".$colores_rgb[$i];
		}

		//voy a construir el color hexadecimal
		$oscuridad = "#".$colores_rgb[0].$colores_rgb[1].$colores_rgb[2];
		
		//la función devuelve el valor del color hexadecimal resultante
		return $oscuridad;
	}



	//Aplicando colores del selector de colores a los estilos
	function ryc_customize_colors_css(){
		$color_destacado = get_theme_mod('ryc_color_destacado');
		?>
			<style type="text/css">
				h2,
				a{
					color: <?php echo $color_destacado; ?>;
				}

				.btn,
				input[type="submit"],
				input[type="button"]{
					background: <?php echo $color_destacado; ?>;
				}

				.btn:hover{
					background: <?php echo oscurecerColor($color_destacado, 15); ?>;
				}

				#main-menu ul li.featured a{
					background: <?php echo $color_destacado; ?>;
				}

				#main-menu ul li.featured a:hover{
					background: <?php echo oscurecerColor($color_destacado, 15); ?>;
				}

				input:focus,
				textarea:focus{
					border-color: <?php echo $color_destacado; ?>;
				}
			</style>
		<?php
	}

	add_action('wp_head', 'ryc_customize_colors_css');

?>