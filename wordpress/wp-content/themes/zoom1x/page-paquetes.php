<!-- Página de paquetes.-->


<?php get_header(); ?>


<div class="principal">
<!-- inicia paquetes -->
	<div class="paquetes">

			<?php query_posts('category_name=paquetes&posts_per_page=4&order=ASC'); ?>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php $custom_fields = get_post_custom(); ?>
			    <div class="textoPaquetes">
			        <h3><?php the_title(); ?><span>$<?php echo $custom_fields['precio'][0];?></span></h3>
			        <?php the_content(); ?>
			    </div >
			 
			<?php endwhile; ?>
			<?php endif; ?>

		</div>


<!-- termina paquetes -->

					Sesiones fotográficas con mascotas.

					Pregunta por nuestros paquetes fotográficos  para eventos. 
					También contamos con video y edición.


					<div class="terminos">
				
                    <button id="hidr" class="boton">Terminos y condiciones</button>
                  	

                  	<span>
                       
                                <section class="condiciones">
						
					
										<ul>
										<li>Las sesiones duran entre 30 minutos y 1 hora 30 minutos, dependiendo del paquete contratado y del número de integrantes por estudio.</li>

										<li>Es recomendable traer objetos personales a la sesión como juguetes preferidos, prendas de ropa cómoda, etc.</li>

										<li>50 por ciento de anticipo y 50 restante a la entrega del paquete. Sólo efectivo.</li>

										<li>La entrega de los paquetes 1 y 2 será una semana después de la sesión. De los paquetes 3 y 4,  en 15 días.</li>


										<li>Cargos adicionales:
										 En caso de requerir maquillaje 
										 Por sesión en domicilio.
										 Después de 6 integrantes por sesión, se cobrará 120 por persona extra.</li>
										 </ul>

									</section>
					 </span>
</div>

					

</div><!-- TERMINA DIV PRINCIPAL-->

<?php get_footer();?>