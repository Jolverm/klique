<!-- Aqui van todos los scripts de js -->

	<?php llamar_ficheros('js', 'js'); ?>



<script type="text/javascript">

 $(window).load(function() {

 $('#nivoslider').nivoSlider();


 });

 </script>

<script>
        $("#hidr").click(function () {
        $("span").slideToggle("slow");
        });
 </script>


<!-- inicia footer -->
<footer>
   <?php get_template_part('derechos'); ?>
</footer><!-- termina footer -->
</div><!-- termina imagenes -->
</div> <!-- termina todo -->
<?php get_sidebar(); ?>
</body>
</html>