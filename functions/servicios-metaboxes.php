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

	//creamos el metabox
	function ryc_servicios_metabox_add(){

		add_meta_box('servicios-details', __('Opciones de la plantilla servicios', 'ryc'), 'ryc_servicios_metabox', 'page', 'normal', 'low', '');

	}

	add_action('add_meta_boxes', 'ryc_servicios_metabox_add');

	//Crear campos del metabox

	//Listado de los campos
	$custom_servicios_meta_fields = array(
		array(
			'titleTab' =>__('Servicio 1', 'ryc'),
			'opciones' => array(
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
					'type' => 'wysiwyg'
				)
			)
		),
		array(
			'titleTab' =>__('Servicio 2', 'ryc'),
			'opciones' => array(
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
					'type' => 'wysiwyg'
				)
			)
		),
		array(
			'titleTab' =>__('Servicio 3', 'ryc'),
			'opciones' => array(
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
					'type' => 'wysiwyg'
				)
			)
		)
	);

	function ryc_servicios_metabox(){
		//obtenemos variables globales
		global $custom_servicios_meta_fields, $post;
		//Crear campo nonce (oculto)
		wp_nonce_field('ryc_servicios_meta_box_nonce', 'meta_box_nonce');
		
		/*si quiero reutilizar las pestañas, me toca cambiar este id o cambiarlo a una clase*/
		?>
		<div class="contenedor_tabs">
		<?php
		//Creamos una pestaña por cada opción
		$primera_tab = true;
		?>
		<h2 class="nav-tab-wrapper current">
		<?php
		foreach ($custom_servicios_meta_fields as $tab){
			
			if( $primera_tab ){ ?>
				<a class="nav-tab nav-tab-active" href="#">
					<?php echo $tab['titleTab']; ?>
				</a>
				<?php
				$primera_tab = false;
			}else{ ?>
				<a class="nav-tab" href="#">
					<?php echo $tab['titleTab']; ?>
				</a>
				<?php
			}
		} ?>
		</h2>
		<?php
		$primera_tab = true;
		foreach ($custom_servicios_meta_fields as $tab) {
			//creamos el contenedor de la info de cada pestaña
			if( $primera_tab ){ ?>
				<div class="inside">
				<?php
				$primera_tab = false;
			}else{ ?>
				<div class="inside hidden">
				<?php
			}
			//Creamos cada opción, segun el tipo de campo
			foreach ($tab['opciones'] as $field) {
				//Obtener el valor del campo
				$meta = get_post_meta( $post->ID, $field['id'], true );
				switch ( $field['type'] ) {
					case 'textarea':{ ?>
						<p>
							<label for="<?php echo $field['id']; ?>"><?php echo $field['label']; ?></label>
							<br />
							<textarea id="<?php echo $field['id']; ?>" name="<?php echo $field['id']; ?>" class="widefat" rows="3"><?php echo $meta; ?></textarea>
							<span class="howto"><?php echo $field['desc']; ?></span>
						</p>
						<hr style="width:100%; height: 1px; border: none; border-bottom: 1px solid white; margin: 15px 0; background-color: #dbdcdd" />
						<?php
						break;
					}//fin case textarea

					case "text":{ ?>
						<p>
							<label for="<?php echo $field['id']; ?>"><?php echo $field['label']; ?></label>
							<br />
							<input type="text" id="<?php echo $field['id']; ?>" name="<?php echo $field['id']; ?>" class="widefat" value="<?php echo $meta; ?>" />
							<span class="howto"><?php echo $field['desc']; ?></span>
						</p>
						<hr style="width:100%; height: 1px; border: none; border-bottom: 1px solid white; margin: 15px 0; background-color: #dbdcdd" />
						<?php
						break;
					}//fin case text

					case 'number':{ ?>
						<p>
							<label for="<?php echo $field['id']; ?>"><?php echo $field['label']; ?></label>
							<br />
							<input type="number" id="<?php echo $field['id']; ?>" name="<?php echo $field['id']; ?>" class="widefat" value="<?php echo $meta; ?>" />
							<span class="howto"><?php echo $field['desc']; ?></span>
						</p>
						<?php
						break;
					}//fin case number

					case 'url':{ ?>
						<p>
							<label for="<?php echo $field['id']; ?>"><?php echo $field['label']; ?></label>
							<br />
							<input type="text" id="<?php echo $field['id']; ?>" name="<?php echo $field['id']; ?>" class="widefat" value="<?php echo esc_url($meta); ?>" />
							<span class="howto"><?php echo $field['desc']; ?></span>
						</p>
						<hr style="width:100%; height: 1px; border: none; border-bottom: 1px solid white; margin: 15px 0; background-color: #dbdcdd" />
						<?php
						break;
					}//fin case url

					case 'title':{ ?>
						<p class="post-attributes-label-wrapper">
							<strong ><?php echo $field['label']; ?></strong>
							<br />
							<span class="howto"><?php echo $field['desc']; ?></span>
						</p>
						<?php
						break;
					}//fin case title

					case 'image':{
						$image = IMAGES.'/imagen_seleccionar.png';
						echo '<div class="meta_box_image"><span class="meta_box_default_image" style="display:none">'.$image.'</span>';
						if ($meta) { 
							$image = wp_get_attachment_image_src( intval( $meta), 'medium');
							$image = $image[0]; 
						}
						echo    '<input name="'.$field['id'].'" type="hidden" class="meta_box_upload_image" value="'. intval( $meta ).'" /><img src="'. esc_attr( $image ).'" class="meta_box_preview_image" alt="" /><br />
							<a href="#" class="meta_box_upload_image_button button" rel="' . get_the_ID() . '">Choose Image</a>
							<small>&nbsp;<a href="#" class="meta_box_clear_image_button">Remove Image</a></small></div>
							<br clear="all" /><span class="description">'.$field['desc'].'</span><hr style="width:100%; height: 1px; border: none; border-bottom: 1px solid white; margin: 15px 0; background-color: #dbdcdd" />';
						break;
					}//fin case image

					case 'post_list':{
						$items = get_posts( array (
							'post_type' => $field['post_type'],
							'posts_per_page' => -1
						));
						echo '<select name="'.$field['id'].'" id="'.$field['id'].'">
								<option value="">'.__('Seleccione destino', 'ryc').'</option>'; // Select One
							foreach($items as $item) {
								echo '<option value="'.$item->ID.'"',$meta == $item->ID ? ' selected="selected"' : '','>'.$item->post_type.': '.$item->post_title.'</option>';
							} // end foreach
						echo '</select><br /><span class="description">'.$field['desc'].'</span><hr style="width:100%; height: 1px; border: none; border-bottom: 1px solid white; margin: 15px 0; background-color: #dbdcdd" />';
						break;
					} //fin case post_list

					case 'wysiwyg':{
						echo '<p>
								<label for="'.$field['id'].'">'.$field['label'].'</label>
								<br />
								<span class="howto">'.$field['desc'].'</span>'.wp_editor($meta, $field['id']).'
							</p>';
						break;
					} //fin case wysiwyg

				}//fin switch
			}
			?>
			</div> <?php //cierre div class="inside" ?>
			<?php
		}
		?>
		</div> <?php //cierre div class="contenedor_tabs" ?>
		<?php
	}//fin funcion ryc_servicios_metabox

	//Guardar valores de los campos al momento de guardar la página
	function ryc_save_servicios_custom_meta( $post_id ){

		global $custom_servicios_meta_fields;

		//verificamos que el nonce haya sido enviado
		if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'ryc_servicios_meta_box_nonce') ){
			return;
		}

		//si es un autosave no hacemos nada
		if( defined('DOING_AUTOSAVE') && DOING_AUTOSAFE ){
			return;
		}

		//verificamos los permisos del usuario
		//Si el tipo de post es una pagina
		if( 'page' == $_POST['post_type'] ){

			if( !current_user_can('edit_page', $post_id) ){
				return;
			}elseif( !current_user_can('edit_post', $post_id) ){
				return;
			}
		}

		//hacemos un ciclo por los campos
		foreach ($custom_servicios_meta_fields as $tab) {
			foreach ($tab['opciones'] as $field) {
				//capturamos los datos antiguos
				$old = get_post_meta($post_id, $field['id'], true);

				//si el campo es de tipo title, seguimos con el siguiente item y no hacemos nada
				if($field['type'] == 'title'){
					continue;
				}
				//capturamos los datos nuevos
				$new = $_POST[ $field['id'] ];
				if( $new && $new != $old){
					//actualizamos el post meta
					if($field['type'] == 'url'){
						update_post_meta($post_id, $field['id'], esc_url($new) );
					}else{
						update_post_meta($post_id, $field['id'], $new);
					}
				}elseif( '' == $new && $old ){
					//borramos el post meta
					delete_post_meta($post_id, $field['id'], $old);
				}
			}
		}
	}

	add_action('save_post', 'ryc_save_servicios_custom_meta');

	//ocultamos el metabox cuando no este seleccionada la plantilla "Servicios"
	function apk_servicios_metabox_css(){
		?>
		<style type="text/css">
			#servicios-details {
				display:none;
			}

			/*Estilos pestañas(tabs)*/
			a.nav-tab {
				margin-bottom: -9px;
			}
			a.nav-tab.nav-tab-active {
				background: #fff;
			}
			a.nav-tab.nav-tab-active:focus {
				box-shadow: none;
			}
			/* image */
			.meta_box_preview_image {
				max-width:200px;
				max-height:200px;
				display:block;
				margin-bottom:3px;
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

			//Script pestañas(tabs)
			jQuery(function( $ ) {
				'use strict';
			
				$(function() {
			
					// Grab the wrapper for the Navigation Tabs
					var navTabs = $( '.contenedor_tabs').children( '.nav-tab-wrapper' ),
						tabIndex = null;
			
					navTabs.children().each(function() {
			
						$( this ).on( 'click', function( evt ) {
			
							evt.preventDefault();
						
							// If this tab is not active...
							if ( ! $( this ).hasClass( 'nav-tab-active' ) ) {
			
								// Unmark the current tab and mark the new one as active
								$( '.nav-tab-active' ).removeClass( 'nav-tab-active' );
								$( this ).addClass( 'nav-tab-active' );
			
								// Save the index of the tab that's just been marked as active. It will be 0 - 3.
								tabIndex = $( this ).index();
			
								// Hide the old active content
								$( '.contenedor_tabs' )
									.children( 'div:not( .inside.hidden )' )
									.addClass( 'hidden' );
			
								$( '.contenedor_tabs' )
									.children( 'div:nth-child(' + ( tabIndex ) + ')' )
									.addClass( 'hidden' );
			
								// And display the new content
								$( '.contenedor_tabs' )
									.children( 'div:nth-child( ' + ( tabIndex + 2 ) + ')' )
									.removeClass( 'hidden' );
			
							}
			
			
						});
					});
			
				});
			
			});

			//script subir imagen
			jQuery(function($) {
			
				// the upload image button, saves the id and outputs a preview of the image
				var imageFrame;
				$('.meta_box_upload_image_button').click(function(event) {
					event.preventDefault();
						
					var options, attachment;
						
					$self = $(event.target);
					$div = $self.closest('div.meta_box_image');
						
					// if the frame already exists, open it
					if ( imageFrame ) {
						imageFrame.open();
						return;
					}
						
					// set our settings
					imageFrame = wp.media({
						title: 'Choose Image',
						multiple: false,
						library: {
					 		type: 'image'
						},
						button: {
					  		text: 'Use This Image'
						}
					});
						
					// set up our select handler
					imageFrame.on( 'select', function() {
						selection = imageFrame.state().get('selection');
							
						if ( ! selection )
							return;
							
						// loop through the selected files
						selection.each( function( attachment ) {
							console.log(attachment);
							var src = attachment.attributes.sizes.full.url;
							var id = attachment.id;
								
							$div.find('.meta_box_preview_image').attr('src', src);
							$div.find('.meta_box_upload_image').val(id);
						} );
					});
						
					// open the frame
					imageFrame.open();
				});
					
				// the remove image link, removes the image id from the hidden field and replaces the image preview
				$('.meta_box_clear_image_button').click(function() {
					var defaultImage = $(this).parent().siblings('.meta_box_default_image').text();
					$(this).parent().siblings('.meta_box_upload_image').val('');
					$(this).parent().siblings('.meta_box_preview_image').attr('src', defaultImage);
					return false;
				});
					
				// the file image button, saves the id and outputs the file name
				var fileFrame;
				$('.meta_box_upload_file_button').click(function(e) {
					e.preventDefault();
					
					var options, attachment;
					
					$self = $(event.target);
					$div = $self.closest('div.meta_box_file_stuff');
					
					// if the frame already exists, open it
					if ( fileFrame ) {
						fileFrame.open();
						return;
					}
						
					// set our settings
					fileFrame = wp.media({
						title: 'Choose File',
						multiple: false,
						library: {
							type: 'file'
						},
						button: {
							text: 'Use This File'
						}
					});
						
					// set up our select handler
					fileFrame.on( 'select', function() {
						selection = fileFrame.state().get('selection');
							
						if ( ! selection )
							return;
							
						// loop through the selected files
						selection.each( function( attachment ) {
							console.log(attachment);
							var src = attachment.attributes.url;
							var id = attachment.id;
							
							$div.find('.meta_box_filename').text(src);
							$div.find('.meta_box_upload_file').val(src);
							$div.find('.meta_box_file').addClass('checked');
						} );
					});
						
					// open the frame
					fileFrame.open();
				});
					
				// the remove image link, removes the image id from the hidden field and replaces the image preview
				$('.meta_box_clear_file_button').click(function() {
					$(this).parent().siblings('.meta_box_upload_file').val('');
					$(this).parent().siblings('.meta_box_filename').text('');
					$(this).parent().siblings('.meta_box_file').removeClass('checked');
					return false;
				});
					
				// function to create an array of input values
				function ids(inputs) {
					var a = [];
					for (var i = 0; i < inputs.length; i++) {
						a.push(inputs[i].val);
					}
				}
			
			});
		</script>
		<?php
	}

	add_action('admin_head', 'apk_servicios_metabox_css');

?>