<?php
/**
 * Singular
 *
 * Esta es la plantilla por defecto
 * para el detalle de los posts 
 * y páginas
 *
 * @author	Ricardo Landínez Ospino
 * @package	ryc-tema-base
 * @since	1.0.0
 *
 */

get_header(); 

?>

	<main class="blog area-contenido cf">	
			
		<div class="container">
			
			<section class="contenido-izq">

				<?php while ( have_posts() ) : the_post(); ?>
			
					<article <?php post_class('post'); ?> >
						
					
						<header class="page-header">
				
							<h1 class="titulo"><?php the_title(); ?></h1>
				
						</header><!-- /.page-header -->
						
						
						<section class="contenido">
							<?php
								if( has_post_thumbnail() ){

									the_post_thumbnail('medium');

								}
							?>

							<?php
								if( get_post_type() == 'post' ){
									get_template_part('template-parts/content','meta');
								}
							?>

							<?php the_content(); ?>

							<?php 
								wp_link_pages(
									array(
											'before'           => '<div class="posts-navigation">' . __( 'Páginas:','ryc' ),
											'after'            => '</div>',
											'link_before'      => '',
											'link_after'       => '',
											'next_or_number'   => 'number',
											'separator'        => ' ',
											'nextpagelink'     => __( 'Página anterior','ryc' ),
											'previouspagelink' => __( 'Página siguiente','ryc' ),
											'pagelink'         => '%',
											'echo'             => 1
										)
								);
							?>
						</section>				
					
					
					</article><!-- /.post -->

				<?php endwhile; ?>

				<?php comments_template(); ?>

			</section><!-- /.contenido-izq -->
			
			<?php get_sidebar(); ?>
		
		</div><!-- /.container -->

	</main><!-- /.area-contenido -->

	<?php get_footer(); ?>