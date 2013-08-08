<!-- Aqui van todos los scripts de js -->

	<?php llamar_ficheros('js', 'js'); ?>



<script type="text/javascript">

 $(window).load(function() {

 $('#nivoslider').nivoSlider();


 });

 </script>

<!-- inicia footer -->

</div><!-- termina imagenes -->
</div> <!-- termina todo -->
<?php get_sidebar(); ?>
<footer>
   <?php get_template_part('derechos'); ?>
</footer><!-- termina footer -->
</body>
</html>