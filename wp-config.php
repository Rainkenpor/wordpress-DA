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
define('DB_NAME', 'digitala_digitalage');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'digitala_adminis');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'C[f@s07R+f,y');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'digitalage.es');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '87ReBwH;hQ7>}xsrSI^&j*uM+isRaW:0-@K8dpT#V[VGk-_VJk#@^Zj!VlZl->$<');
define('SECURE_AUTH_KEY', 'F[[g^f;fU05!zw=>{G5^ ;i=ve{na~+SJgVcH*^RZ`BlnqdqxGtpKaCv.>iA$DGw');
define('LOGGED_IN_KEY', '5HvfWlRuHz3+xzO^j_C}H^UT;1Pq~Z_uE#4@UYnKlTL6oNP)nnfo.4h;ExK+N&q4');
define('NONCE_KEY', '.K$cqN5NRW:7wWrD@s$qYI`K)P>u7E!GC#R.:d(}C<w{SO[1GHKNTKVRFT})y:xg');
define('AUTH_SALT', 'dD||_1`vi/B2e;;m5C+!LL:1A<3uv&Uj *b/&`S-mY;X,a)IdnAYi~{WCL!Q Oop');
define('SECURE_AUTH_SALT', 'ZJCSh>go@;|eqe71}kKUp&-YNmE4}ouRHtqO:rv}S>l CAs~fmdbb,5oxTii=i#U');
define('LOGGED_IN_SALT', '<KBP}N&;%m)j:wH*pnst8W|7XE~Os]X1?~_v`%Sv<=ESQ.D*yC}@umA-oMZpo!_,');
define('NONCE_SALT', 'TP$]>ficLF5x;>h*&3+Q*A?w>sA?V?g9$_V,f6=.w? @+&Ew-))CQy~fkk3nX+X0');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'da_';


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
