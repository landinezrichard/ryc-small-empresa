<?php
/**
 * Comments
 *
 * Esta es la plantilla de comentarios
 *
 * @author	Ricardo Landínez Ospino
 * @package	ryc-tema-base
 * @since	1.0.0
 *
 */

	//Seguridad para que no ingresen directamente a este archivo
	if( !empty($_SERVER['SCRIPT_FILENAME']) && basename($_SERVER['SCRIPT_FILENAME']) == 'comments.php' ){
		die( __('No puedes cargar este archivo directamente', 'ryc') );
	}
?>

<div id="comments">

<?php
	//comprobación si la entrada tiene contraseña
	if( post_password_required() ){ ?>
		<p>
			<?php 
				_e('Este contenido requiere contraseña', 'ryc');
			?>
		</p>
		</div>
		<?php
		return;
	}
	
	// Si es que hay comentarios y estan permitidos
	if( have_comments() || comments_open() ){ 
		?>
		
		<a href="#respond"></a>
		<h3 class="comments-title">
			<?php
				comments_number(
					__('No hay comentarios aún', 'ryc'),
					__('Hay un comentario', 'ryc'),
					__('Hay % comentarios', 'ryc')
				);
			?>
		</h3>

		<ol id="comments-list">
			<?php
				wp_list_comments('avatar_size=32');
			?>
		</ol><!-- /#comments-list -->
		<?php

		//paginacion para comentarios

		if( get_comment_pages_count() > 1 && get_option('page_comments') ){ ?>
			<div class="comments-nav-section cf">
				<p class="alignleft">
					<?php previous_comments_link( __('&larr; Comentarios antiguos', 'ryc') ); ?>
				</p>
				<p class="alignright">
					<?php next_comments_link( __('Comentarios recientes &rarr;', 'ryc') ); ?>
				</p>
				<hr />
			</div>
			<?php
		}
	// Mensaje de comentarios cerrados
	}elseif( !is_page() && post_type_supports( get_post_type(), 'comments' ) ){ ?>
		<p><?php _e('Los comentarios están cerrrados', 'ryc'); ?></p>
		<?php
	}

	//mostrar formulario de comentarios
	comment_form();
?>
</div>