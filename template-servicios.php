<?php
/**
 * Template name: Plantilla Servicios
 *
 * Esta es la plantilla para los Servicios
 * Descripción larga y detalle de los
 * 3 servicios.
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
	// CAMPOS SERVICIOS
	//---------------------------------------------------------------------

	$servicio_1_imagen = get_post_meta( $post->ID, 'servicio_1_imagen', true);
	$servicio_1_imagen_url = wp_get_attachment_url( $servicio_1_imagen );
	$servicio_1_titulo = get_post_meta( $post->ID, 'servicio_1_title', true);
	$servicio_1_descripcion = get_post_meta( $post->ID, 'descripcion_servicio_1', true);

	$servicio_2_imagen = get_post_meta( $post->ID, 'servicio_2_imagen', true);
	$servicio_2_imagen_url = wp_get_attachment_url( $servicio_2_imagen );
	$servicio_2_titulo = get_post_meta( $post->ID, 'servicio_2_title', true);
	$servicio_2_descripcion = get_post_meta( $post->ID, 'descripcion_servicio_2', true);

	$servicio_3_imagen = get_post_meta( $post->ID, 'servicio_3_imagen', true);
	$servicio_3_imagen_url = wp_get_attachment_url( $servicio_3_imagen );
	$servicio_3_titulo = get_post_meta( $post->ID, 'servicio_3_title', true);
	$servicio_3_descripcion = get_post_meta( $post->ID, 'descripcion_servicio_3', true);


?>

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
		
		<?php if( $servicio_1_titulo && $servicio_1_descripcion ){ ?>
			
			<section class="detalle-servicio">
			<?php if( $servicio_1_imagen_url ){ ?>
				<div class="icono">
					<figure class="icono-servicio">
						<img src="<?php echo $servicio_1_imagen_url; ?>" alt="<?php echo esc_attr($servicio_1_titulo); ?>" />
					</figure><!-- /.icono-servicio -->
				</div><!-- /.icono -->
			<?php } ?>
				<div class="text">
					
					<h2><?php echo $servicio_1_titulo; ?></h2>
					
					<?php echo apply_filters('the_content', $servicio_1_descripcion ); ?>
				</div><!-- /.text -->
			</section><!-- /.detalle-servicio -->

		<?php } ?>

		<?php if( $servicio_2_titulo && $servicio_2_descripcion ){ ?>
			
			<section class="detalle-servicio">
			<?php if( $servicio_2_imagen_url ){ ?>
				<div class="icono">
					<figure class="icono-servicio">
						<img src="<?php echo $servicio_2_imagen_url; ?>" alt="<?php echo esc_attr($servicio_2_titulo); ?>" />
					</figure><!-- /.icono-servicio -->
				</div><!-- /.icono -->
			<?php } ?>
				<div class="text">
					
					<h2><?php echo $servicio_2_titulo; ?></h2>
					
					<?php echo apply_filters('the_content', $servicio_2_descripcion ); ?>
				</div><!-- /.text -->
			</section><!-- /.detalle-servicio -->

		<?php } ?>

		<?php if( $servicio_3_titulo && $servicio_3_descripcion ){ ?>
			
			<section class="detalle-servicio">
			<?php if( $servicio_3_imagen_url ){ ?>
				<div class="icono">
					<figure class="icono-servicio">
						<img src="<?php echo $servicio_3_imagen_url; ?>" alt="<?php echo esc_attr($servicio_3_titulo); ?>" />
					</figure><!-- /.icono-servicio -->
				</div><!-- /.icono -->
			<?php } ?>
				<div class="text">
					
					<h2><?php echo $servicio_3_titulo; ?></h2>
					
					<?php echo apply_filters('the_content', $servicio_3_descripcion ); ?>
				</div><!-- /.text -->
			</section><!-- /.detalle-servicio -->

		<?php } ?>

		</div><!-- /.content -->
		
	</article><!-- /#single-page -->

<?php endwhile; ?>
</main><!-- /#content-area -->

<?php get_footer(); ?>