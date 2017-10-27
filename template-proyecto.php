<?php
/**
 * Template name: Proyecto
 *
 * Esta es la plantilla de detalle para un Proyecto
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

<?php while ( have_posts() ) : the_post(); 

	//---------------------------------------------------------------------
	// TESTIMONIO
	//---------------------------------------------------------------------
	$testimonio_texto = '';
	$testimonio_autor = '';
	$testimonio_cargo = '';
	$testimonio_imagen = '';
	$testimonio_imagen_url = '';


	$testimonio_texto = get_post_meta( $post->ID, 'proyecto_metaboxtext_testimonio', true);
	$testimonio_autor = get_post_meta( $post->ID, 'proyecto_metaboxautor_testimonio', true);
	$testimonio_cargo = get_post_meta( $post->ID, 'proyecto_metaboxcargo_testimonio', true);
	$testimonio_imagen = get_post_meta( $post->ID, 'proyecto_metaboximagen_testimonio', true);
	$testimonio_imagen_url = wp_get_attachment_url( $testimonio_imagen );

?>

	<article <?php post_class('single-page portafolio-detalle'); ?> >
		
		
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

			<?php
				if( has_post_thumbnail() ){

					the_post_thumbnail('large', array(
						'class' => 'imagen-destacada',
						'alt' => the_title_attribute('echo=0')
					));

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
						
		</div><!-- /.content -->
		
	</article><!-- /#single-page -->


</main><!-- /#content-area -->

<?php if( $testimonio_texto && $testimonio_autor ){ ?>
<aside id="testimonios-area">
	
	<div class="container testimonio">
		<blockquote>
			<p><?php echo $testimonio_texto; ?></p>
			<cite>
				<?php
					if( $testimonio_imagen_url ){ ?>
						<img src="<?php echo $testimonio_imagen_url; ?>" alt="<?php echo esc_attr( $testimonio_autor ); ?>" class="alignleft">
				<?php } ?>
				<strong><?php echo $testimonio_autor; ?></strong>
			<?php
				if( $testimonio_cargo ){
					echo $testimonio_cargo;
				}
			?>
			</cite>
		</blockquote>
	</div>
	
</aside><!-- /#testimonios-area -->

<?php } ?>

<?php endwhile; ?>

<?php get_footer(); ?>