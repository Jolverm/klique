<?php get_header(); ?>
<!-- inicia imagenes galeria -->
<aside id="contenedorGaleria" class="imagenesColumnas">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail('large'); } ?>
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</aside>
<!-- termina imagene0 galeria -->
<?php get_template_part('general/barra', 'categorias'); ?>
<?php get_footer(); ?>