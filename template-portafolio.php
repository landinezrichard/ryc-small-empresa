<?php
/**
 * Template name: Portafolio
 *
 * Esta es la plantilla para el listado de proyectos
 * 
 *
 * @author	Ricardo Landínez Ospino
 * @package	ryc-small-empresa
 * @since	1.0.0
 *
 */

get_header(); 

?>

<main id="content-area">

	<div class="list-page">

		<?php while ( have_posts() ) : the_post(); 
			$page_parent_id = $post->ID;
		?>
		
		<header class="page-header">
			<div class="container">
				
				<h1><?php the_title(); ?></h1>
				
				<?php 
				if( has_excerpt() ){
					the_excerpt();
				}
				?>
			
			</div>
		</header><!-- /.page-header -->

		<div class="container page-content">
			<?php the_content(); ?>
		</div>
		
		<?php endwhile; ?>

		<?php
		$proyectos_query = new WP_Query(array(
			'post_type' 	=> 'page',
			'post_parent'   => $page_parent_id,
			'posts_per_page' => -1
		));

		if ( $proyectos_query->have_posts() ) : 
		?>
		
		<div class="container list-content">
		
			<div class="portafolio-list cols">
				
				<?php 
				while ( $proyectos_query->have_posts() ) : $proyectos_query->the_post(); 
				?>
				<article class="portafolio-resumen col3">
					<?php
						if( has_post_thumbnail() ){

							the_post_thumbnail('medium', array(
								'class' => 'imagen-destacada',
								'alt' => the_title_attribute('echo=0')
							));

						}
					?>
					<header>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</header>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="btn btn-light"><?php _e('Ver estudio de caso', 'ryc'); ?></a>
				</article><!-- /.portafolio-resumen -->

				<?php endwhile; ?>

			</div>
		
		</div><!-- /.list-content -->

		<?php

			endif;

			wp_reset_postdata();

		?>
		
	</div><!-- /.list-page -->

</main><!-- /#content-area -->

<?php get_footer(); ?>