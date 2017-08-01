<?php
/**
 * Singular
 *
 * Esta es la plantilla por defecto
 * para el detalle de los posts 
 * y páginas
 *
 * @author	Ricardo Landínez Ospino
 * @package	ryc-small-empresa
 * @since	1.0.0
 *
 */

get_header(); 

?>

<main id="content-area">

<?php while ( have_posts() ) : the_post(); ?>

	<article <?php post_class('single-page'); ?> >
		
		
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
						
		</div><!-- /.content -->
		
	</article><!-- /#single-page -->

<?php endwhile; ?>
</main><!-- /#content-area -->

<?php get_footer(); ?>