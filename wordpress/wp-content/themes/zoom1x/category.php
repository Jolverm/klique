<?php get_header(); ?>
<!-- inicia imagenes galeria -->
<aside id="contenedorGaleria" class="imagenesColumnas">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php if ( has_post_thumbnail() ) ?>
        <?php $imagen = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); ?>
		<?php $miniatura = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small' ); ?>
		<?php $src1 = $imagen['0']; ?>
		<?php $src2 = $miniatura['0']; ?>
		<a href="<?php echo $src1 ?>" data-lightbox="categoria" title="<?php the_title(); ?>">
			<img class="wp-post-image" src="<?php echo $src2 ?>" alt="<?php the_title();?>" />
		</a>
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</aside>
<!-- termina imagene0 galeria -->
<?php get_template_part('general/barra', 'categorias'); ?>
<?php get_footer(); ?>




						