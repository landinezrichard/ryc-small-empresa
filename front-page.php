<?php

/**
 * FRONT-PAGE
 *
 * Esta es la plantilla del front page
 *
 * @author	Ricardo Landínez Ospino
 * @package	ryc-tema-base
 * @since	1.0.0
 *
 */

get_header();

//loop
if ( have_posts() ) : while ( have_posts() ) : the_post();

	//---------------------------------------------------------------------
	// ZONA DESTACADA
	//---------------------------------------------------------------------
	
	$titulo_destacado = get_post_meta( $post->ID, 'main_title', true);
	
	if( !$titulo_destacado ){
		$titulo_destacado = 'Diseño web profesional para potenciar la imagen de tu negocio';
	}
	
	//obtiene el id de la imagen destacada
	$imagen_destacada = get_post_meta( $post->ID, 'main_image', true);
	//obtiene la ruta de la imagen destacada
	$imagen_destacada_url = wp_get_attachment_url( $imagen_destacada );

	if( !$imagen_destacada ){
		$imagen_destacada_url = IMAGES . '/home-dispositivos.png';
	}
	
	$parrafo_destacado = get_post_meta( $post->ID, 'main_text', true);

	$boton_1_post_id = get_post_meta( $post->ID, 'btn_link_1', true);
	$enlace_boton_1 = get_the_permalink($boton_1_post_id);
	$texto_boton_1 = get_post_meta( $post->ID, 'btn_text_1', true);

	$boton_2_post_id = get_post_meta( $post->ID, 'btn_link_2', true);
	$enlace_boton_2 = get_the_permalink($boton_2_post_id);
	$texto_boton_2 = get_post_meta( $post->ID, 'btn_text_2', true);

	//---------------------------------------------------------------------
	// ZONA SERVICIOS
	//---------------------------------------------------------------------

	$servicio_1_imagen = get_post_meta( $post->ID, 'imagen_servicio_1', true);
	$servicio_1_imagen_url = wp_get_attachment_url( $servicio_1_imagen );
	$servicio_1_titulo = get_post_meta( $post->ID, 'title_servicio_1', true);
	$servicio_1_descripcion = get_post_meta( $post->ID, 'text_servicio_1', true);

	$servicio_2_imagen = get_post_meta( $post->ID, 'imagen_servicio_2', true);
	$servicio_2_imagen_url = wp_get_attachment_url( $servicio_2_imagen );
	$servicio_2_titulo = get_post_meta( $post->ID, 'title_servicio_2', true);
	$servicio_2_descripcion = get_post_meta( $post->ID, 'text_servicio_2', true);

	$servicio_3_imagen = get_post_meta( $post->ID, 'imagen_servicio_3', true);
	$servicio_3_imagen_url = wp_get_attachment_url( $servicio_3_imagen );
	$servicio_3_titulo = get_post_meta( $post->ID, 'title_servicio_3', true);
	$servicio_3_descripcion = get_post_meta( $post->ID, 'text_servicio_3', true);

	$texto_boton_servicios = get_post_meta( $post->ID, 'btn_text_servicios', true);
	$boton_servicios = get_post_meta( $post->ID, 'btn_link_servicios', true);
	$link_boton_servicios = get_the_permalink($boton_servicios);

	//---------------------------------------------------------------------
	// ZONA TESTIMONIOS
	//---------------------------------------------------------------------

	$testimonio_1_texto = get_post_meta( $post->ID, 'text_testimonio_1', true);
	$testimonio_1_autor = get_post_meta( $post->ID, 'autor_testimonio_1', true);
	$testimonio_1_cargo = get_post_meta( $post->ID, 'cargo_testimonio_1', true);
	$testimonio_1_imagen = get_post_meta( $post->ID, 'imagen_testimonio_1', true);
	$testimonio_1_imagen_url = wp_get_attachment_url( $testimonio_1_imagen );

	$testimonio_2_texto = get_post_meta( $post->ID, 'text_testimonio_2', true);
	$testimonio_2_autor = get_post_meta( $post->ID, 'autor_testimonio_2', true);
	$testimonio_2_cargo = get_post_meta( $post->ID, 'cargo_testimonio_2', true);
	$testimonio_2_imagen = get_post_meta( $post->ID, 'imagen_testimonio_2', true);
	$testimonio_2_imagen_url = wp_get_attachment_url( $testimonio_2_imagen );

	$testimonio_3_texto = get_post_meta( $post->ID, 'text_testimonio_3', true);
	$testimonio_3_autor = get_post_meta( $post->ID, 'autor_testimonio_3', true);
	$testimonio_3_cargo = get_post_meta( $post->ID, 'cargo_testimonio_3', true);
	$testimonio_3_imagen = get_post_meta( $post->ID, 'imagen_testimonio_3', true);
	$testimonio_3_imagen_url = wp_get_attachment_url( $testimonio_3_imagen );
?>	
	
	<main id="content-area">
		
		<section id="hero-container">
			
			<article id="hero" class="container">
				<span class="dispositivos" style="background-image: url(<?php echo $imagen_destacada_url; ?>);">
					<img src="<?php echo $imagen_destacada_url; ?>" alt="<?php echo esc_attr($titulo_destacado); ?>">
				</span>
				<header>
					<h2><?php echo $titulo_destacado; ?></h2>
				</header>
				
				<?php if($parrafo_destacado) : ?>
					<p><?php echo $parrafo_destacado; ?></p>
				<?php endif; ?>
				
				<?php if( $enlace_boton_1 && $texto_boton_1 ): ?>
					<a href="<?php echo $enlace_boton_1 ?>" class="btn"><?php echo $texto_boton_1; ?></a> 
				<?php endif; ?>
				
				<?php if( $enlace_boton_2 && $texto_boton_2 ): ?>
					<a href="<?php echo $enlace_boton_2 ?>" class="btn btn-light"><?php echo $texto_boton_2; ?></a>
				<?php endif; ?>
			
			</article>
			
		</section><!-- /#hero-container -->
		
		<?php
		//mostramos esta seccion solo si el servicio1 tiene titulo y descripcion
		if( $servicio_1_titulo && $servicio_1_descripcion ){
		?>
		<section id="servicios-home" class="container">
			
			<div class="cols cf">

				<?php 
				if( $servicio_1_titulo && $servicio_1_descripcion ){
				?>
				
				<article class="servicio-resumen col3">
					
					<?php
					if( $servicio_1_imagen_url ){
					?>

					<div class="icono">
						<figure class="icono-servicio">
							<img src="<?php echo $servicio_1_imagen_url; ?>" alt="<?php echo esc_attr($servicio_1_titulo); ?>" />
						</figure><!-- /.icono-servicio -->
					</div><!-- /.icono -->

					<?php
					}
					?>
					
					<div class="text">
						
						<h2><?php echo $servicio_1_titulo; ?></h2>
						
						<p><?php echo $servicio_1_descripcion; ?> </p>
					</div><!-- /.text -->
					
				</article><!-- /.servicio-resumen -->

				<?php
				} //fin servicio 1

				if( $servicio_2_titulo && $servicio_2_descripcion ){
				?>
				
				<article class="servicio-resumen col3">
					
					<?php
					if( $servicio_2_imagen_url ){
					?>

					<div class="icono">
						<figure class="icono-servicio">
							<img src="<?php echo $servicio_2_imagen_url; ?>" alt="<?php echo esc_attr($servicio_2_titulo); ?>" />
						</figure><!-- /.icono-servicio -->
					</div><!-- /.icono -->

					<?php
					}
					?>
					
					<div class="text">
						
						<h2><?php echo $servicio_2_titulo; ?></h2>
						
						<p><?php echo $servicio_2_descripcion; ?> </p>
					</div><!-- /.text -->
					
				</article><!-- /.servicio-resumen -->

				<?php
				} //fin servicio 2

				if( $servicio_3_titulo && $servicio_3_descripcion ){
				?>
				
				<article class="servicio-resumen col3">
					
					<?php
					if( $servicio_3_imagen_url ){
					?>

					<div class="icono">
						<figure class="icono-servicio">
							<img src="<?php echo $servicio_3_imagen_url; ?>" alt="<?php echo esc_attr($servicio_3_titulo); ?>" />
						</figure><!-- /.icono-servicio -->
					</div><!-- /.icono -->

					<?php
					}
					?>
					
					<div class="text">
						
						<h2><?php echo $servicio_3_titulo; ?></h2>
						
						<p><?php echo $servicio_3_descripcion; ?> </p>
					</div><!-- /.text -->
					
				</article><!-- /.servicio-resumen -->

				<?php } //fin servicio 3 ?>
				
			</div><!-- /.cols -->

		<?php if( $texto_boton_servicios && $link_boton_servicios ){ ?>
			<div class="text-center">
				<a href="<?php echo esc_url( $link_boton_servicios ); ?>" class="btn btn-light"><?php echo $texto_boton_servicios; ?></a>
			</div>
		<?php } ?>
			
		</section><!-- /#servicios-home -->
	<?php } ?>
	

	</main><!-- /#content-area -->
	
	<?php if( $testimonio_1_texto && $testimonio_1_autor ){ ?>
	<aside id="testimonios-area">
		
		<div class="flexslider container">
			<div class="slides">
				
				<div class="testimonio">
					<blockquote>
						<p><?php echo $testimonio_1_texto; ?></p>
						<cite>
							<?php
								if( $testimonio_1_imagen_url ){ ?>
									<img src="<?php echo $testimonio_1_imagen_url; ?>" alt="<?php echo esc_attr( $testimonio_1_autor ); ?>" class="alignleft">
							<?php } ?>
							<strong><?php echo $testimonio_1_autor; ?></strong>
							<?php
								if( $testimonio_1_cargo ){
									echo $testimonio_1_cargo;
								}
							?>
						</cite>
					</blockquote>
				</div><!-- /.testimonio -->
				
				<?php if($testimonio_2_texto && $testimonio_2_autor ){ ?>
					<div class="testimonio">
						<blockquote>
							<p><?php echo $testimonio_2_texto; ?></p>
							<cite>
								<?php
									if( $testimonio_2_imagen_url ){ ?>
										<img src="<?php echo $testimonio_2_imagen_url; ?>" alt="<?php echo esc_attr( $testimonio_2_autor ); ?>" class="alignleft">
								<?php } ?>
								<strong><?php echo $testimonio_2_autor; ?></strong>
								<?php
									if( $testimonio_2_cargo ){
										echo $testimonio_2_cargo;
									}
								?>
							</cite>
						</blockquote>
					</div><!-- /.testimonio -->
				<?php } ?>

				<?php if($testimonio_3_texto && $testimonio_3_autor ){ ?>
					<div class="testimonio">
						<blockquote>
							<p><?php echo $testimonio_3_texto; ?></p>
							<cite>
								<?php
									if( $testimonio_3_imagen_url ){ ?>
										<img src="<?php echo $testimonio_3_imagen_url; ?>" alt="<?php echo esc_attr( $testimonio_3_autor ); ?>" class="alignleft">
								<?php } ?>
								<strong><?php echo $testimonio_3_autor; ?></strong>
								<?php
									if( $testimonio_3_cargo ){
										echo $testimonio_3_cargo;
									}
								?>
							</cite>
						</blockquote>
					</div><!-- /.testimonio -->
				<?php } ?>
		
			</div><!-- /.slides -->
		</div><!-- /.flexslider -->
		
	</aside><!-- /#testimonios-area -->
	<?php } ?>

<?php endwhile; endif; //fin loop ?>	
	
	
<?php get_footer(); ?>