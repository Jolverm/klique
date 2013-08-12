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
<script type="text/javascript">
	var container = document.querySelector('#contenedorGaleria');
	var msnry = new Masonry( container, {
	  // options
	  itemSelector: '.wp-post-image'
	});
</script>
<!-- inicia footer -->

</div><!-- termina imagenes -->
</div> <!-- termina todo -->
</body>
</html>