<?php get_header(); ?>

           		<div class="principal">
           						 				  
					 <div class="slider-wrapper theme-default">
					 <div class="ribbon"></div>
					 <div id="nivoslider" class="nivoSlider">

					 	<?php query_posts('category_name=slides&posts_per_page=2'); ?>
						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
						
						<?php $foto = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small' );
						$src = $foto['0'];
						echo '<img src="'.$src.'">';
						?>
				   	 	
					<?php endwhile; ?>
					<?php endif; ?>

				   	 </div>
					 </div>


				</div>
           		  <!-- Termina Principal-->
              
                <?php get_template_part('general/barra', 'categorias'); ?>
 
 <?php get_footer();?>