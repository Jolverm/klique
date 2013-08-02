<?php
/*
* Se activa la opción para la imagen destacada (thumbnails).
*/

if ( function_exists( 'add_theme_support' ) ) {

    add_theme_support( 'post-thumbnails' );

}

/* Se activa la funcion de menus */

function registrar_menus() {

    register_nav_menus(

        array( 'sidebar' => __( 'sidebar' ) )

    );

}

add_action( 'init', 'registrar_menus' );

?>