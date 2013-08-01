<?php get_header(); ?>

           		<div class="principal">
           		
 				  <?php if ( function_exists('show_nivo_slider') ) { show_nivo_slider(); } ?>

				</div>
           		  <!-- Termina Principal-->
              
                <?php get_template_part('categorias'); ?>
 
 <?php get_footer();?>