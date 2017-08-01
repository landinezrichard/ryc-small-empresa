<?php
/**
 * Content meta
 *
 * Este archivo sirve para ccargar los metadatos 
 * de un post, como la categoría el link a 
 * los comentarios y los tags
 *
 * @author	Ricardo Landínez Ospino
 * @package	ryc-tema-base
 * @since	1.0.0
 *
 */
?>
<div class="meta">
	<div class="category">
		<?php _e('Categorías', 'ryc'); ?>: <?php the_category(', '); ?>
	</div>

	<div class="tags"><?php the_tags(); ?></div>

	<?php if( comments_open() || have_comments() ){ ?>
		<div class="comentarios">
			<a href="<?php comments_link(); ?>">
				<?php
					comments_number(
						__('Sé el primero en comentar', 'ryc'),
						__('1 comentario disponible', 'ryc'),
						__('% comentarios', 'ryc')
					);
				?>
			</a>
		</div>
	<?php } ?>

	<div class="author"><?php _e('Por', 'ryc'); ?>: <?php the_author_posts_link(); ?></div>

</div>