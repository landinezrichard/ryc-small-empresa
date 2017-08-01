<?php
/**
 * Sidebar
 *
 * Esta es la plantilla para el sidebar del tema
 *
 * @author	Ricardo Landínez Ospino
 * @package	ryc-tema-base
 * @since	1.0.0
 *
 */
?>
<aside class="sidebar-right" id="main-sidebar">
	
	<?php
		if( is_active_sidebar('sidebar-principal') ){
			dynamic_sidebar('sidebar-principal');
		}else{ ?>
		
			<div class="widget">
				<h3 class="widget-title">
					<?php
						_e('Buscar', 'ryc');
					?>
				</h3>

				<?php get_search_form(); ?>
			</div>
	<?php
		}
	?>
	
</aside><!-- /#main-sidebar -->	