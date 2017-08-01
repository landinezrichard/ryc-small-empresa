<?php
/**
 * Menus
 *
 * Registra todas las zonas de menú necesarias
 * para el correcto funcionamiento del tema
 *
 * @author	Ricardo Landínez Ospino
 * @package	ryc-tema-base
 * @since	1.0.0
 *
 */

	function ryc_register_menus(){

		register_nav_menus( array(
			'menu-principal' => __('Menú principal', 'ryc')
		) );		
	}

	add_action('init','ryc_register_menus');
?>