<!-- Página de paquetes.-->


<?php get_header(); ?>
    <div class="principal">
            <!-- inicia imagenes galeria -->
            <div class="productosAdicionales">
                <?php query_posts('category_name=adicionales&posts_per_page=4'); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php if ( has_post_thumbnail() ) ?>
                            <?php $miniatura = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                            <?php $src2 = $miniatura['0']; ?>
                            <div class="imagenIndividualAdicionales">

                                    <div class="vista">  
                 <img class="wp-post-image" src="<?php echo $src2 ?>" alt="<?php the_title();?>" />
                <div class="mascara">  
                    <h2><?php echo the_title();?></h2>  
                    <p><?php echo the_excerpt();?></p>  
                </div>  
            </div>
          






                               
                               

                                                           </div><!-- fin de imagen individual-->
                <?php endwhile; else: ?>
                <p><?php _e('Lo sentimos la categoria esta vacia.'); ?></p>
                <?php endif; ?>
            </div> <!-- fin de galeria-->

            
    </div>

<?php get_footer(); ?>




                        