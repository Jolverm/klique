<!-- Página de Quiénes somos.-->
	
<?php get_header(); ?>



<!-- inicia imagenes galeria -->
                <article class="quienesSomos">
                   
							<?php 
								if ( have_posts() ) {
									while ( have_posts() ) {
										the_post(); 
										 the_content();
										} // end while
								} // end if
							?>
                </article>

                <?php $imagen = array('1', '2', '3'); ?>
        		<?php $i = rand(0, 2) ?>

                <aside class="imagenQuienes" style="background-image:url(<?php bloginfo('template_directory');?>/img/quienes/<?php echo $imagen[$i]; ?>.jpg); background-size:cover;">
                </aside>
                <!-- termina imagene0 galeria -->




<?php get_footer();?>