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

/* 
 * Esta funcion insert los archivos de estilos o los js 
 * @param $dir | Directorio en el que se buscaran los archivos, ejemplo css.
 * @param $tipo | Tipo de archivo, ejemplo js.
 * @example llamar_ficheros('estilos', 'css'); | Este ejemplo inluye los links de los archivos CSS en la carpeta estilos.
 * @return N/A
 */
function llamar_ficheros($dir, $tipo)
{
	$ruta = './wp-content/themes/'.str_replace(' ', '', get_current_theme()).'/'.$dir;
	$ruta = strtolower($ruta);
	$directorio = opendir($ruta); //ruta actual
	while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
	{
		if (!is_dir($archivo))//verificamos si es o no un directorio
		{
			if($tipo == 'js'){ 
			?><script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/<?php echo $dir ?>/<?php echo $archivo; ?>"></script><?php
			} elseif($tipo == 'css') {
				?><link rel="stylesheet" img="all" href="<?php bloginfo( 'template_directory' ); ?>/<?php echo $dir ?>/<?php echo $archivo; ?>" /><?php
			}
		}
	}
}

?>