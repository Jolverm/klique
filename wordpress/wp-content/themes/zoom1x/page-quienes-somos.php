<!-- Página de Quiénes somos.-->
<?php get_header(); ?>
<?php for ($i=1; $i <= 20; $i++) { 
    $imagen[$i] = $i;
} ?>
<?php $count = count(($imagen)) - 1; ?>
<?php $i = rand(0, $count); ?>
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