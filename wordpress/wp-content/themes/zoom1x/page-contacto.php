<!-- Página de paquetes.-->


<?php get_header(); ?>


<div class="principal"><!-- INICIA DIV PRINCIPAL-->
    <div class="cajaDatos">
        <div class="datos">
            <div class="nombre">
                Ximena Monterde<span>Fotógrafa</span>
            </div>
            <div class="informacion">
                5671.2115 / 04455 2756.7111 
                <a href ="mailto:xmonterde@klique.com.mx"> xmonterde@klique.com.mx</a> 
                <a href ="mailto:contacto@klique.com.mx"> contacto@klique.com.mx</a>
                <a href ="http://www.klique.com.mx">www.klique.com.mx</a><br>
                <a href="https://www.facebook.com/Kliquefotografia?fref=ts">Facebook: Klique fotografía</a> 
            </div>
            <div class="contacto">

                <form method="post">
                    <input class="campos" id="nombre" name="nombre" type=" text" placeholder="nombre" required="required">
                    <input class="campos" id="email" name="email" type="email" placeholder="correo" required="required">
                    <p>
                    <textarea class="campos" id="mensaje" name="mensaje" cols="43" rows="1" placeholder="mensaje" required="required"></textarea>
                    <div class="enviar">
                            <div class="ultimo">
                                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/loading.gif" class="ajaxgif hide" />
                                    <div class="msg"></div>
                                    <button class="boton">enviar</button>
                            </div>
                    </div>
                </form>
            </div>
            
        </div>
        
    </div>

<div class="mapa">
<iframe width="290" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com.mx/maps?t=m&amp;dg=opt&amp;ie=UTF8&amp;ll=19.344472,-99.16764&amp;spn=0.011196,0.021136&amp;z=16&amp;output=embed"></iframe>

</div>

<div class="direccion">
    <div class="textoDireccion">
        Dirección: </br>
        Miguel Ángel de Quevedo No. 499 Int. 301</br>
        Col. Romero de Terreros, Del. Coyoacan</br>
        C.P. 04310 México, D.F.</br>
    </div>

    <div class="imagenDireccion">
        <img src="<?php bloginfo( 'template_directory' ); ?>/img/qr.png"/>
                                    
    </div>
</div>



</div><!-- TERMINA DIV PRINCIPAL-->

<?php get_footer();?>