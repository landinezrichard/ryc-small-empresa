<?php
/**
 * Metaboxes del home
 *
 * Campos adicionales para la plantilla
 * del home
 *
 * @author	Ricardo Landínez Ospino
 * @package	ryc-tema-base
 * @since	1.0.0
 *
 */

$prefix = '';

$tabs_nav = array(
	__('Principal', 'ryc'), // <label>
	__('Servicios', 'ryc'), // <label>
	__('Testimonios', 'ryc') // <label>
);

$tab_1 = array(
	array( //Title
		'label' => __('Area Principal', 'ryc'), // <label>
		'desc' => __('Ingrese el contenido a destacar en el home (texto destacado, descripción, el texto del botón, el destino del botón, imagen destacada', 'ryc'), // description
		'type' => 'title' // type of field
	),
	array( // Textarea
		'label' => __('Titulo destacado', 'ryc'), // <label>
		'desc' => __('Ingresa el titulo a destacar en la página de inicio.', 'ryc'), // description
		'id' => 'main_title',
		'type' => 'textarea' // type of field
	),
	array( // Textarea
		'label' => __('Descripción destacada', 'ryc'), // <label>
		'desc' => __('Ingresa el texto a destacar en la página de inicio.', 'ryc'), // description
		'id' => 'main_text',
		'type' => 'textarea' // type of field
	),
	array( // Text
		'label' => __('Texto del botón 1', 'ryc'), // <label>
		'desc' => __('Ingresa el texto del botón 1 (call to action)', 'ryc'), // description
		'id' => 'btn_text_1',
		'type' => 'text' // type of field
	),
	array( // Post_select, Post_chosen
		'label' => __('Link del botón 1', 'ryc'), // <label>
		'desc' => __('Ingrese la página de destino del botón 1', 'ryc'), // description
		'id' => 'btn_link_1',
		// 'type' => 'url'
		'type' => 'post_list',
		'post_type' => 'page' // type of field
	),
	array( // Text
		'label' => __('Texto del botón 2', 'ryc'), // <label>
		'desc' => __('Ingresa el texto del botón 2 (call to action)', 'ryc'), // description
		'id' => 'btn_text_2',
		'type' => 'text' // type of field
	),
	array( // Post_select, Post_chosen
		'label' => __('Link del botón 2', 'ryc'), // <label>
		'desc' => __('Ingrese la página de destino del botón 2', 'ryc'),
		'id' => 'btn_link_2',
		// 'type' => 'url'
		'type' => 'post_list',
		'post_type' => 'page' // type of field
	),
	array( // Image
		'label'  => 'Imagen Principal', // <label>
		'desc'  => __('Añada la imagen a destacar.', 'ryc'), // description
		'id'    => 'main_image',
		'type'  => 'image' // type of field
	)
);

$tab_2 = array(
	array(
		'label' => __('Área de Servicios', 'ryc'),
		'desc' => __('Seleccione las imagenes, titulo y descripción, para los items de servicios.', 'ryc'),
		'type' => 'title'
	),
	array(
		'label'  => 'Imagen Servicio 1',
		'desc'  => __('Añada la imagen del Servicio 1.', 'ryc'),
		'id'    => 'imagen_servicio_1',
		'type'  => 'image'
	),
	array(
		'label' => __('Titulo Servicio 1', 'ryc'),
		'desc' => __('Ingresa el titulo del Servicio 1.', 'ryc'),
		'id' => 'title_servicio_1',
		'type' => 'text'
	),
	array(
		'label' => __('Descripción Servicio 1', 'ryc'),
		'desc' => __('Ingresa la descripción del área 1.', 'ryc'),
		'id' => 'text_servicio_1',
		'type' => 'textarea'
	),
	array(
		'label'  => 'Imagen Servicio 2',
		'desc'  => __('Añada la imagen del Servicio 2.', 'ryc'),
		'id'    => 'imagen_servicio_2',
		'type'  => 'image'
	),
	array(
		'label' => __('Titulo Servicio 2', 'ryc'),
		'desc' => __('Ingresa el titulo del Servicio 2.', 'ryc'),
		'id' => 'title_servicio_2',
		'type' => 'text'
	),
	array(
		'label' => __('Descripción Servicio 2', 'ryc'),
		'desc' => __('Ingresa la descripción del área 2.', 'ryc'),
		'id' => 'text_servicio_2',
		'type' => 'textarea'
	),
	array(
		'label'  => 'Imagen Servicio 3',
		'desc'  => __('Añada la imagen del Servicio 3.', 'ryc'),
		'id'    => 'imagen_servicio_3',
		'type'  => 'image'
	),
	array(
		'label' => __('Titulo Servicio 3', 'ryc'),
		'desc' => __('Ingresa el titulo del Servicio 3.', 'ryc'),
		'id' => 'title_servicio_3',
		'type' => 'text'
	),
	array(
		'label' => __('Descripción Servicio 3', 'ryc'),
		'desc' => __('Ingresa la descripción del área 3.', 'ryc'),
		'id' => 'text_servicio_3',
		'type' => 'textarea'
	),
	array(
		'label' => __('Texto del botón Servicios', 'ryc'),
		'desc' => __('Ingresa el texto del botón Servicios (call to action)', 'ryc'),
		'id' => 'btn_text_servicios',
		'type' => 'text'
	),
	array(
		'label' => __('Link del botón Servicios', 'ryc'),
		'desc' => __('Ingrese la página de destino del botón Servicios (URL)', 'ryc'),
		'id' => 'btn_link_servicios',
		// 'type' => 'url'
		'type' => 'post_list',
		'post_type' => 'page'
	)
);

$tab_3 = array(
	array(
		'label' => __('Sección Testimonios', 'ryc'),
		'desc' => __('Añada el testimonio, autor, cargo e imagen.', 'ryc'),
		'id' => 'title_area',
		'type' => 'title'
	),
	array(
		'label' => __('Testimonio 1 texto', 'ryc'),
		'desc' => __('Ingresa la descripción del testimonio 1.', 'ryc'),
		'id' => 'text_testimonio_1',
		'type' => 'textarea'
	),
	array(
		'label' => __('Testimonio 1 autor', 'ryc'),
		'desc' => __('Ingresa el autor del testimonio 1.', 'ryc'),
		'id' => 'autor_testimonio_1',
		'type' => 'textarea'
	),
	array(
		'label' => __('Testimonio 1 cargo', 'ryc'),
		'desc' => __('Ingresa el cargo del testimonio 1.', 'ryc'),
		'id' => 'cargo_testimonio_1',
		'type' => 'textarea'
	),
	array(
		'label'  => 'Testimonio 1 imagen',
		'desc'  => __('Añada la imagen del testimonio 1.', 'ryc'),
		'id'    => 'imagen_testimonio_1',
		'type'  => 'image'
	),
	array(
		'label' => __('Testimonio 2 texto', 'ryc'),
		'desc' => __('Ingresa la descripción del testimonio 2.', 'ryc'),
		'id' => 'text_testimonio_2',
		'type' => 'textarea'
	),
	array(
		'label' => __('Testimonio 2 autor', 'ryc'),
		'desc' => __('Ingresa el autor del testimonio 2.', 'ryc'),
		'id' => 'autor_testimonio_2',
		'type' => 'textarea'
	),
	array(
		'label' => __('Testimonio 2 cargo', 'ryc'),
		'desc' => __('Ingresa el cargo del testimonio 2.', 'ryc'),
		'id' => 'cargo_testimonio_2',
		'type' => 'textarea'
	),
	array(
		'label'  => 'Testimonio 2 imagen',
		'desc'  => __('Añada la imagen del testimonio 2.', 'ryc'),
		'id'    => 'imagen_testimonio_2',
		'type'  => 'image'
	),
	array(
		'label' => __('Testimonio 3 texto', 'ryc'),
		'desc' => __('Ingresa la descripción del testimonio 3.', 'ryc'),
		'id' => 'text_testimonio_3',
		'type' => 'textarea'
	),
	array(
		'label' => __('Testimonio 3 autor', 'ryc'),
		'desc' => __('Ingresa el autor del testimonio 3.', 'ryc'),
		'id' => 'autor_testimonio_3',
		'type' => 'textarea'
	),
	array(
		'label' => __('Testimonio 3 cargo', 'ryc'),
		'desc' => __('Ingresa el cargo del testimonio 3.', 'ryc'),
		'id' => 'cargo_testimonio_3',
		'type' => 'textarea'
	),
	array(
		'label'  => 'Testimonio 3 imagen',
		'desc'  => __('Añada la imagen del testimonio 3.', 'ryc'),
		'id'    => 'imagen_testimonio_3',
		'type'  => 'image'
	)
);

$tabs = array($tab_1, $tab_2, $tab_3);

/**
 * Instantiate the class with all variables to create a meta box
 * var $id string meta box id
 * var $title string title
 * var $fields array fields
 * var $page string|array post type to add meta box to
 * var $js bool including javascript or not
 */
$home_box = new custom_add_meta_box( 'home-details', __('Opciones de página de inicio', 'ryc'), $tabs, 'page', true );

$home_box->set_tabsnav($tabs_nav);
$home_box->create_save_metabox();

//ocultamos el metabox cuando no sea el "Homepage"
function ryc_home_metabox_css(){
	?>
		<style type="text/css">
			/*Ocultar metabox home*/
			#home-details {
				display:none;
			}			
		</style>
	<?php

	//Obtienes el id de la página seteada como home
	$homepage = get_option( 'page_on_front' );

	//Creas la variable vacía
	$editing_post = '';

	//Obtienes el id de la página que se esté editando
	//actualizas o dejas en blanco
	if( isset( $_GET['post'] ) ) :
		$editing_post = $_GET['post'];
	endif; 

	//Verificas si la página editandose es la misma que está seteada como homepage
	if( $homepage == $editing_post ) {

	?>

		<script type="text/javascript">
			jQuery('document').ready(function($){
				//muestra las opciones para el frontpage
				slider_box = function(){
					$('#home-details').slideDown();					
				}

				slider_box();

				$('label[for="home-details-hide"]').remove();
			});

		</script>
	<?php
	} //fin if($homepage == $editing_post)
}

add_action('admin_head', 'ryc_home_metabox_css');

?>