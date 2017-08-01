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


	//creamos el metabox
	function ryc_home_metabox_add(){

		add_meta_box('home-details', __('Opciones de página de inicio', 'ryc'), 'ryc_home_metabox', 'page', 'normal', 'high', '');

	}

	add_action('add_meta_boxes', 'ryc_home_metabox_add');

	//Crear campos del metabox

	//Listado de los campos
	$custom_home_meta_fields = array(
		array(
			'titleTab' =>__('Principal', 'ryc'),
			'opciones' => array(
				array(
					'label' => __('Area Principal', 'ryc'),
					'desc' => __('Ingrese el contenido a destacar en el home (texto destacado, descripción, el texto del botón, el destino del botón, imagen destacada', 'ryc'),
					'id' => 'title_area',
					'type' => 'title'
				),
				array(
					'label' => __('Titulo destacado', 'ryc'),
					'desc' => __('Ingresa el titulo a destacar en la página de inicio.', 'ryc'),
					'id' => 'main_title',
					'type' => 'textarea'
				),
				array(
					'label' => __('Descripción destacada', 'ryc'),
					'desc' => __('Ingresa el texto a destacar en la página de inicio.', 'ryc'),
					'id' => 'main_text',
					'type' => 'textarea'
				),
				array(
					'label' => __('Texto del botón 1', 'ryc'),
					'desc' => __('Ingresa el texto del botón 1 (call to action)', 'ryc'),
					'id' => 'btn_text_1',
					'type' => 'text'
				),
				array(
					'label' => __('Link del botón 1', 'ryc'),
					'desc' => __('Ingrese la página de destino del botón 1', 'ryc'),
					'id' => 'btn_link_1',
					// 'type' => 'url'
					'type' => 'post_list',
					'post_type' => 'page'
				),
				array(
					'label' => __('Texto del botón 2', 'ryc'),
					'desc' => __('Ingresa el texto del botón 2 (call to action)', 'ryc'),
					'id' => 'btn_text_2',
					'type' => 'text'
				),
				array(
					'label' => __('Link del botón 2', 'ryc'),
					'desc' => __('Ingrese la página de destino del botón 2', 'ryc'),
					'id' => 'btn_link_2',
					// 'type' => 'url'
					'type' => 'post_list',
					'post_type' => 'page'
				),
				array(
					'label'  => 'Imagen Principal',
					'desc'  => __('Añada la imagen a destacar.', 'ryc'),
					'id'    => 'main_image',
					'type'  => 'image'
				)
			)
		),
		array(
			'titleTab' =>__('Servicios', 'ryc'),
			'opciones' => array(
				array(
					'label' => __('Área de Servicios', 'ryc'),
					'desc' => __('Seleccione las imagenes, titulo y descripción, para los items de servicios.', 'ryc'),
					'id' => 'title_area',
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
			)
		),
		array(
			'titleTab' =>__('Testimonios', 'ryc'),
			'opciones' => array(
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
			)
		)
	);

	function ryc_home_metabox(){
		//obtenemos variables globales
		global $custom_home_meta_fields, $post;
		//Crear campo nonce (oculto)
		wp_nonce_field('ryc_home_meta_box_nonce', 'meta_box_nonce');
		
		?>
		<div id="contenedor_tabs">
		<?php
		//Creamos una pestaña por cada opción
		$primera_tab = true;
		?>
		<h2 class="nav-tab-wrapper current">
		<?php
		foreach ($custom_home_meta_fields as $tab){
			
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
		}?>
		</h2>
		<?php
		$primera_tab = true;
		foreach ($custom_home_meta_fields as $tab) {
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

				}//fin switch
			}
			?>
			</div> <?php //cierre div class="inside" ?>
			<?php
		}
		?>
		</div> <?php //cierre div id="contenedor_tabs" ?>
		<?php
	}//fin funcion ryc_home_metabox


	//Guardar valores de los campos al momento de guardar la página
	function ryc_save_home_custom_meta( $post_id ){

		global $custom_home_meta_fields;

		//verificamos que el nonce haya sido enviado
		if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'ryc_home_meta_box_nonce') ){
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
		foreach ($custom_home_meta_fields as $tab) {
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
					}elseif($field['type'] == 'title'){
						//si es de tipo title no hacemos nada
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

	add_action('save_post', 'ryc_save_home_custom_meta');


	//ocultamos el metabox cuando no sea el "Homepage"
	function ryc_home_metabox_css(){
		?>
		<style type="text/css">
			/*Ocultar metabox home*/
			#home-details {
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

			//Script pestañas(tabs)
			(function( $ ) {
				'use strict';
			
				$(function() {
			
					// Grab the wrapper for the Navigation Tabs
					var navTabs = $( '#contenedor_tabs').children( '.nav-tab-wrapper' ),
						tabIndex = null;
			
					/* Whenever each of the navigation tabs is clicked, check to see if it has the 'nav-tab-active'
					 * class name. If not, then mark it as active; otherwise, don't do anything (as it's already
					 * marked as active.
					 *
					 * Next, when a new tab is marked as active, the corresponding child view needs to be marked
					 * as visible. We do this by toggling the 'hidden' class attribute of the corresponding variables.
					 */
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
								$( '#contenedor_tabs' )
									.children( 'div:not( .inside.hidden )' )
									.addClass( 'hidden' );
			
								$( '#contenedor_tabs' )
									.children( 'div:nth-child(' + ( tabIndex ) + ')' )
									.addClass( 'hidden' );
			
								// And display the new content
								$( '#contenedor_tabs' )
									.children( 'div:nth-child( ' + ( tabIndex + 2 ) + ')' )
									.removeClass( 'hidden' );
			
							}
			
			
						});
					});
			
				});
			
			})( jQuery );

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
					//$("span").text(a.join(" "));
				}
			
			});

		</script>
		<?php
		} //fin if($homepage == $editing_post)
	}

	add_action('admin_head', 'ryc_home_metabox_css');
?>