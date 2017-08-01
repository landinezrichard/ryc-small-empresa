<?php
/**
 * Metaboxes de Proyectos
 *
 * Campos adicionales para añadir un 
 * testimonio a cada proyecto
 *
 * @author	Ricardo Landínez Ospino
 * @package	ryc-tema-base
 * @since	1.0.0
 *
 */


$prefix = 'proyecto_metabox';

$fields = array(
	array( // Textarea
		'label'	=> 'Testimonio texto', // <label>
		'desc'	=> 'Ingresa la descripción del testimonio.', // description
		'id'	=> $prefix.'text_testimonio', // field id and name
		'type'	=> 'textarea' // type of field
	),
	array( // Text Input
		'label'	=> 'Testimonio autor', // <label>
		'desc'	=> 'Ingresa el autor del testimonio.', // description
		'id'	=> $prefix.'autor_testimonio', // field id and name
		'type'	=> 'text' // type of field
	),
	array( // Text Input
		'label'	=> 'Testimonio cargo', // <label>
		'desc'	=> 'Ingresa el cargo del autor del testimonio.', // description
		'id'	=> $prefix.'cargo_testimonio', // field id and name
		'type'	=> 'text' // type of field
	),
	array( // Image ID field
		'label'	=> 'Testimonio imagen', // <label>
		'desc'	=> 'Seleccione la imagen del autor del testimonio.', // description
		'id'	=> $prefix.'imagen_testimonio', // field id and name
		'type'	=> 'image' // type of field
	)
);

/**
 * Instantiate the class with all variables to create a meta box
 * var $id string meta box id
 * var $title string title
 * var $fields array fields
 * var $page string|array post type to add meta box to
 * var $js bool including javascript or not
 */
$sample_box = new custom_add_meta_box( 'proyecto-details', 'Testimonio del proyecto', $fields, 'page', true );


/*
Mostrar los campos solo para las paginas hijas de portafolio 
*/

function apk_proyectos_metabox_css(){
	?>
		<style type="text/css">
			#proyecto-details {
				display:none;
			}
		</style>
	<?php

	$editing_post = '';

	//Obtienes el id de la página que se esté editando	
	if( isset( $_GET['post'] ) ) {
		$editing_post = $_GET['post'];
	}

	//obtener el id de la pagina padre
	$padre_id = wp_get_post_parent_id( $editing_post );

	//obtener el titulo de la pagina padre con ese id
	$padre_title = get_the_title( $padre_id );

	if( $padre_title == 'Portafolio'){
	?>
		<script type="text/javascript">
			jQuery('document').ready(function($){
				//esta función detecta el atributo del selector de paginas padre (Atributos de pagina / Superior)

				//si esta seleccionado "Portafolio" mostrara el metabox, sino lo oculta
				slider_box_proyectos = function(){
					if( $('#parent_id').attr('value') == '<?php echo $padre_id; ?>' ){
						$('#proyecto-details').slideDown();
					}else{
						$('#proyecto-details').hide();
					}
				}

				slider_box_proyectos();

				//cada vez que el selector de template cambie, se ejecutara
				$('#parent_id').change(slider_box_proyectos);

				$('label[for="proyecto-details-hide"]').remove();

			});
		</script>
		<?php
	}else{ ?>
		<script type="text/javascript">
			jQuery('document').ready(function($){
				$('label[for="proyecto-details-hide"]').remove();
			});
		</script>
		<?php

	}
}

add_action('admin_head', 'apk_proyectos_metabox_css');

?>