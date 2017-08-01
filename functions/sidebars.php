<?php
/**
 * Sidebars
 *
 * Este archivo sirve para registrar todas 
 * las zonas dinámicas para widgets
 *
 * @author	Ricardo Landínez Ospino
 * @package	ryc-tema-base
 * @since	1.0.0
 *
 */

	function ryc_register_sidebars(){
		register_sidebar(
			array(
				'name' => __('Barra lateral', 'ryc'),
				'id'   => 'sidebar-principal',
				'description' => __('Esta es la zona principal para widgets', 'ryc'),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>'
			)
		);
	}

	add_action('widgets_init', 'ryc_register_sidebars');

?>