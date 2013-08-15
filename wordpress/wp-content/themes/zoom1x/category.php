<?php get_header(); ?>
	<div class="principal">
			<!-- inicia imagenes galeria -->
			<div class="galeria">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					        <?php if ( has_post_thumbnail() ) ?>
					        <?php $imagen = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); ?>
							<?php $miniatura = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
							<?php $src1 = $imagen['0']; ?>
							<?php $src2 = $miniatura['0']; ?>
							<div class="imagenIndividual">
								<a href="<?php echo $src1 ?>" data-lightbox="categoria" title="<?php the_title(); ?>">
								<img class="wp-post-image" src="<?php echo $src2 ?>" alt="<?php the_title();?>" />
								</a>
							</div><!-- fin de imagen individual-->
				<?php endwhile; else: ?>
				<p><?php _e('Lo sentimos la categoria esta vacia.'); ?></p>
				<?php endif; ?>
			</div> <!-- fin de galeria-->

			
	</div>

<?php get_template_part('general/barra', 'categorias'); ?>
<?php get_footer(); ?>




						