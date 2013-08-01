<!-- Aqui van todos los scripts de js -->

<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/galeria.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.nivo.slider.pack.js"></script>



<script type="text/javascript">

 $(window).load(function() {

 $('#nivoslider').nivoSlider();

 });

 </script>

<!-- inicia footer -->
<footer>
   <?php get_template_part('derechos'); ?>
</footer><!-- termina footer -->
</div><!-- termina imagenes -->
</div> <!-- termina todo -->
</body>
</html>