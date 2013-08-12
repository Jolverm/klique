<!-- Página de Quiénes somos.-->
<?php get_header(); ?>
<?php $imagen = array('1', '2', '3'); ?>
<?php $i = rand(0, 2) ?>
<!-- inicia imagenes galeria -->
    <article class="quienesSomos">
    	<p>
    	<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					 the_content();
					} // end while
			} // end if
		?>
		</p>
    	<img src="<?php bloginfo('template_directory');?>/img/quienes/<?php echo $imagen[$i]; ?>.jpg">
    </article>
    <div class="fondoQuienes">
    	<img src="<?php bloginfo('template_directory');?>/img/quienes/<?php echo $imagen[$i]; ?>.jpg">
    </div>
    <!-- termina imagene0 galeria -->
<?php get_footer();?>