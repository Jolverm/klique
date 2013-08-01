<?php get_header(); ?>
	<!-- inicia imagenes galeria -->
    <article class="imagenPrincipal">
    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    		<div class="foto_grande <?php echo get_the_ID(); ?>">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
            </div>
    		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
    </article>
    <aside class="imagenesColumnas">
    	
    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="imagenesCol" onclick="mostrar_grande('<?php echo get_the_ID(); ?>');">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
            </div>
    		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
    </aside>
    <!-- termina imagene0 galeria -->
<?php get_footer(); ?>