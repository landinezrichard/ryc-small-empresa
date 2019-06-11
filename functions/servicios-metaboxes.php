<?php
/**
 * Metaboxes de Servicios
 *
 * Campos adicionales para la plantilla
 * de Servicios
 *
 * @author	Ricardo Landínez Ospino
 * @package	ryc-tema-base
 * @since	1.0.0
 *
 */

// Pestañas (tabs)

$tab_1 = array(
	array(
		'label' => __('Servicio 1', 'ryc'),
		'desc' => __('Seleccione la imagen, titulo y descripción, para el servicio 1.', 'ryc'),
		'id' => 'title_area',
		'type' => 'title'
	),
	array(
		'label'  => 'Imagen Servicio 1',
		'desc'  => __('Añada la imagen del Servicio 1.', 'ryc'),
		'id'    => 'servicio_1_imagen',
		'type'  => 'image'
	),
	array(
		'label' => __('Titulo Servicio 1', 'ryc'),
		'desc' => __('Ingresa el titulo del Servicio 1.', 'ryc'),
		'id' => 'servicio_1_title',
		'type' => 'text'
	),
	array(
		'label' => __('Descripción Servicio 1', 'ryc'),
		'desc' => __('Ingrese la descripción del servicio 1.', 'ryc'),
		'id' => 'descripcion_servicio_1',
		'type' => 'editor', //wysiwyg
		'sanitizer' => 'wp_kses_post',
		'settings' => array(
			'media_buttons' => false,//quitamos la opcion de subir fotos
			'teeny' => true//editor basico, sin tantas opciones
		)
	)
);

$tab_2 = array(
	array(
		'label' => __('Servicio 2', 'ryc'),
		'desc' => __('Seleccione la imagen, titulo y descripción, para el servicio 2.', 'ryc'),
		'id' => 'title_area',
		'type' => 'title'
	),
	array(
		'label'  => 'Imagen Servicio 2',
		'desc'  => __('Añada la imagen del Servicio 2.', 'ryc'),
		'id'    => 'servicio_2_imagen',
		'type'  => 'image'
	),
	array(
		'label' => __('Titulo Servicio 2', 'ryc'),
		'desc' => __('Ingresa el titulo del Servicio 2.', 'ryc'),
		'id' => 'servicio_2_title',
		'type' => 'text'
	),
	array(
		'label' => __('Descripción Servicio 2', 'ryc'),
		'desc' => __('Ingresa la descripción del servicio 2.', 'ryc'),
		'id' => 'descripcion_servicio_2',
		'type' => 'editor', //wysiwyg
		'sanitizer' => 'wp_kses_post',
		'settings' => array(
			'media_buttons' => false,
			'teeny' => true
		)
	)
);

$tab_3 = array(
	array(
		'label' => __('Servicio 3', 'ryc'),
		'desc' => __('Seleccione la imagen, titulo y descripción, para el servicio 3.', 'ryc'),
		'id' => 'title_area',
		'type' => 'title'
	),
	array(
		'label'  => 'Imagen Servicio 3',
		'desc'  => __('Añada la imagen del Servicio 3.', 'ryc'),
		'id'    => 'servicio_3_imagen',
		'type'  => 'image'
	),
	array(
		'label' => __('Titulo Servicio 3', 'ryc'),
		'desc' => __('Ingresa el titulo del Servicio 3.', 'ryc'),
		'id' => 'servicio_3_title',
		'type' => 'text'
	),
	array(
		'label' => __('Descripción Servicio 3', 'ryc'),
		'desc' => __('Ingresa la descripción del servicio 3.', 'ryc'),
		'id' => 'descripcion_servicio_3',
		'type' => 'editor', //wysiwyg
		'sanitizer' => 'wp_kses_post',
		'settings' => array(
			'media_buttons' => false,
			'teeny' => true
		)
	)
);

$tabs = array($tab_1, $tab_2, $tab_3);

//Navegación Pestañas
$tabs_nav = array(
	__('Servicio 1', 'ryc'), // <label>
	__('Servicio 2', 'ryc'), // <label>
	__('Servicio 3', 'ryc') // <label>
);

/**
 * Instantiate the class with all variables to create a meta box
 * var $id string meta box id
 * var $title string title
 * var $fields array fields
 * var $page string|array post type to add meta box to
 * var $js bool including javascript or not
 */
$servicios_box = new custom_add_meta_box( 'servicios-details', __('Opciones de la plantilla servicios', 'ryc'), $tabs, 'page', true );

$servicios_box->set_tabsnav($tabs_nav);
$servicios_box->create_save_metabox();

//ocultamos el metabox cuando no este seleccionada la plantilla "Servicios"
function apk_servicios_metabox_css(){
	?>
	<style type="text/css">
		/*Ocultar metabox servicios*/
		#servicios-details {
			display:none;
		}
	</style>

	<script type="text/javascript">
		jQuery('document').ready(function($){

			//esta función detecta el atributo del selector de plantillas

			//si esta seleccionado "template-servicios.php" mostrara el metabox, sino lo oculta
			slider_box_servicios = function(){
				if( $('#page_template').attr('value') == 'template-servicios.php' ){
					$('#servicios-details').slideDown();
					//ocultamos el editor principal, ya que en esta plantilla no lo usamos
					$('#postdivrich').hide();
				}else{
					$('#servicios-details').hide();
				}
			}

			slider_box_servicios();

			//cada vez que el selector de template cambie, se ejecutara
			$('#page_template').change(slider_box_servicios);

			$('label[for="servicios-details-hide"]').remove();

		});

	</script>
	<?php
}

add_action('admin_head', 'apk_servicios_metabox_css');

?>