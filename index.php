<?php 
/**
 * Index
 *
 * Esta es la plantilla por defecto del tema
 *
 * @author	Ricardo Landínez Ospino
 * @package	ryc-tema-base
 * @since	1.0.0
 *
 */

get_header(); 

?>
			
<main id="content-area">	
		
	<div class="list-page">
		
		<header class="page-header">
			<div class="container">

			<?php if( is_archive() ){ ?>

				<h1><?php the_archive_title(); ?></h1>

			<?php }elseif( is_search() ){ ?>

				<h1><?php _e('Busqueda: ', 'ryc'); ?> <?php the_search_query(); ?></h1>

			<?php }elseif( is_404() ){ ?>

				<h1><?php _e('Página no encontrada', 'ryc'); ?> </h1>

			<?php }elseif ( is_home() ) { ?>

				<h1><?php _e('Blog', 'ryc'); ?></h1>

			<?php }else{ ?>

				<h1><?php bloginfo('name'); ?></h1>

			<?php } ?>
			</div>
		</header><!-- /.page-header -->
			
			
		<div class="container list-content">
		
			<div class="cols">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
				<article <?php post_class('col3'); ?> id="post-<?php the_ID();?>">
					<?php
						//descomentar si se quiere ver imagenes destacadas
						/*
						if( has_post_thumbnail() ){

							$post_title = the_title_attribute('echo=0');
							$post_id = get_the_id();

							the_post_thumbnail(
								'medium',
								array(
									'class' => 'imagen-destacada',
									'id' => 'imagen-'.$post_id,
									'alt' => $post_title
								)
							);
						}
						*/
					?>
					<h2 class="blogpost-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					
					<?php get_template_part('template-parts/content','meta'); ?>

					<?php the_excerpt(); ?>
					<p><a class="btn btn-light" href="<?php the_permalink(); ?>"><?php _e('Ver más...', 'ryc'); ?></a></p>
				</article><!-- /.post -->

			<?php endwhile; else: ?>
				<article <?php post_class('post'); ?> >
					<h2>
						<?php _e('No hay contenidos disponibles', 'ryc'); ?>
					</h2>
					<p>
					<?php _e('No hay contenidos que correspondan con esta página, por favor realiza una búsqueda para encontrar lo que deseas ver:', 'ryc'); ?>
					</p>
					<?php get_search_form(); ?>
					
				</article>
			<?php endif; ?>
			
			</div>
		
		</div><!-- /.list-content -->
			
			<?php if( get_next_posts_link() || get_previous_posts_link() ){ ?>
				<div class="posts-navigation cf">
					<nav class="container text-center">
					<?php
						global $wp_query;

						$big = 999999999; // need an unlikely integer
						
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages
						) );
					?>
					</nav>
					
				</div> <!-- end .posts-navigation -->
			<?php } ?>
		
		
		
		<?php //get_sidebar(); ?>

	</div><!-- /.container -->



</main><!-- /.area-contenido -->
	
<?php get_footer(); ?>