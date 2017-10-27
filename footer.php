<?php

/**
 * Archivo de pie de página(footer)
 *
 * Este archivo maneja el html del footer
 *
 * @author Ricardo Landínez Ospino 
 * @package ryc-tema-base
 * @since 1.0
 * 
 */

	$ryc_copyright = get_theme_mod('ryc_copyright');

	$ryc_cta_text = get_theme_mod('ryc_cta_text');
	$ryc_cta_btn_text = get_theme_mod('ryc_cta_btn_text');
	$ryc_cta_btn_url = get_theme_mod('ryc_cta_btn_url');

?>

	<footer id="main-footer">
		
		<?php if($ryc_cta_text && $ryc_cta_btn_text && $ryc_cta_btn_url){ ?>
		<div class="footer-call-to-action">
			
			<p class="container"><?php echo $ryc_cta_text; ?> <a href="<?php echo $ryc_cta_btn_url; ?>" class="btn"><?php echo $ryc_cta_btn_text; ?></a></p>
			
		</div><!-- /.footer-call-to-action -->

		<?php } ?>
		
		<div id="bottom-footer" class="container cf">
			
			<div class="copyright">
				<?php 
					if( $ryc_copyright ) {
						echo $ryc_copyright;
					}else{ 
				?>

					&copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?>

				<?php } ?>
			</div><!-- /.copyright -->
			
			<nav id="footer-menu">
				<?php wp_nav_menu(array(
					'location' => 'menu-principal',
					'container_class' => 'menu'
				)); ?>
			</nav><!-- /#footer-menu -->
			
		</div><!-- /#bottom-footer -->
		
	</footer><!-- /#main-footer -->

	<?php wp_footer(); ?>
	
</body>
</html>