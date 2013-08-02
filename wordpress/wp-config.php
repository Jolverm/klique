<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'klique');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'punkkd182');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'H.hwC9GUQ{ Q $eJ#NjG.hRe>~+Rwb3{ &sX?+]t a#MxD/x|m2`xApZo!dH4R@o'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '.F3%n1nK$pozffxo6s[UhP7r)k+F-oJ@iLB?lVps%ZoOzYoxv0^H<S#cPcAIvyi#'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'wsY+rCwJ$w,,m5rD^vaSGu^]QTfrbS@s|;,T$ZCHNi&6Ila>d-muOq/T^h{g>c,:'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'O`Lv/z_|<sNP~G,+V~Vo<*#%vi)h0c2gp+J>q&u[/IV,P^15W:rxp&PQGP;!Bb6v'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'A,50$$mR$UO/`}i)Nr7lND+g}^W(#x |5L$|R-~5>Rk=`~uPiIV@Ubi[-x30fo|P'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'D/~H!s]rT#eV&8W;od+qF5FfU/#7UO2PU?{WsM##N[i/T-zH.8.yp%wNo_9cul6o'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'k}[sD9TfoX0Q94AKbc]FFTd+S,*w|~Z-ggerh2i0+NxwDKdHsGt!]2<3-?W4&TJg'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'oXf`C~CtQPZd|Hd9/(U8{ogO0K[=/Ve1ebaZ#M0AiFe5DlM0k*-pZY1G25z>t= H'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

