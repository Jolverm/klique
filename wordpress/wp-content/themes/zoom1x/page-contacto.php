<!-- Página de Contacto.
-->
<?php get_header(); ?>
<div class="tituloContacto">
		Contacto
</div>
<!--Termina tituloContacto-->
<div class="contacto">
	<form class="contactos" metod="post" action="https://dub110.mail.live.com/default.aspx?id=64855">
		<h3>
			Nombre:
		</h3>
			<INPUT type=text name="nombre" placeholder="Nombre.." />
		<h3>
			Correo:
		</h3>
			<INPUT  type=text name="correo" placeholder="Correo.." />
		<h3>
			Telefono:
		</h3>
			<INPUT type=text name="nombre" placeholder="Telefono.." />
		<h3>
			Mensaje:
		</h3>		
		<textarea placeholder="Mensaje.." class="mensaje" />

		</textarea>
		<!-- Termina el textarea-->
		<input class="botonAceptar"type="submit" value="Enviar">
		<!--Boton para enviar el formulario-->
		<input class="botonBorrar"type="reset" value="Borrar">
		<!-- Boton para borrar los datos ingresados-->
	</form>
	<!-- fin del form contactos>-->
</div>
<!-- aqui termina contacto-->
<?php get_footer();?>