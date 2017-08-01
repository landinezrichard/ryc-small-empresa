<?php
/**
 * Archivo de cabecera
 *
 * Este archivo maneja el html del head y el header
 *
 * @author Ricardo Landínez Ospino
 * @package ryc-small-empresa
 * @since 1.0
 *  
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	
	<?php
		//Carga el script para comentarios
		if( is_singular() && get_option('thread_comments') ){
			wp_enqueue_script('comment-reply'); 
		}
	?>

	<?php wp_head(); ?>

	<?php
		// Carga el logo desde el customizer
		$ryc_logo = get_theme_mod('ryc_logo');

		if( !$ryc_logo ){
			// Carga un logo por defecto
			$ryc_logo = IMAGES.'/logo.svg';
		}
	?>
	
</head>
<body <?php body_class(); ?> >

	<section id="main-header" class="container cf">

		<a class="logo-header" href="<?php echo home_url(); ?>" title="Inicio">
			<span class="logo"><img src="<?php echo $ryc_logo; ?>" alt="<?php bloginfo('name'); ?>" /></span>
			<span class="slogan"><?php bloginfo('description'); ?></span>
		</a><!-- /#logo-header -->
		
		<span class="menu-trigger"><img src="<?php echo IMAGES; ?>/menu-responsive.svg" alt="Abrir menú" /></span>

		<nav id="main-menu" role="navigation" class="closed">
			<?php wp_nav_menu(array(
				'location' => 'menu-principal',
				'container_class' => 'menu'
			)); ?>
		</nav><!-- /#main-menu -->

	</section><!-- /#main-header -->