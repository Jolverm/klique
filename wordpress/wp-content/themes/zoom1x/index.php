<?php get_header(); ?>

           		<div class="principal">
           						 				  
					 <div class="slider-wrapper theme-default">
					 <div class="ribbon"></div>
					 <div id="nivoslider" class="nivoSlider">
						<img src="<?php bloginfo( 'template_directory' ); ?>/img/slider/1.jpg" data-thumb="<?php bloginfo( 'template_directory' ); ?>/img/slider/1.jpg" alt=""/>
				        <img src="<?php bloginfo( 'template_directory' ); ?>/img/slider/2.jpg" data-thumb="<?php bloginfo( 'template_directory' ); ?>/img/slider/2.jpg" alt="" data-transition="slideInLeft" />
					 </div>
					 </div>


				</div>
           		  <!-- Termina Principal-->
              
                <?php get_template_part('general/barra', 'categorias'); ?>
 
 <?php get_footer();?>