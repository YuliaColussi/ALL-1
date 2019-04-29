<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'PORTFOLIO-TEST' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*hPqjEspHQT$3<,Kil;7rII$uI@D_|{F3Gt&ie8s1Bisk@$t.*gw}?+5qG].TYz!' );
define( 'SECURE_AUTH_KEY',  ')fi!7=K]v1YF4;1`~2*k&nOiwA})1{]70n+5}M^B l;4@;1d*:kgfFBl#zXZ6L.v' );
define( 'LOGGED_IN_KEY',    'BN3@ NPUI~Y6ZXHxPu2.JGVhXZb+}c;,goC#^<H}{(OT,ak9Sbxp.vb;U7>HYT<]' );
define( 'NONCE_KEY',        'eN9Kv^NY*D]}D?*+vrUqCibr%4wd-++&XUx_.`Lb1]f1AHC|]bqF_Fg7_N>GbNb^' );
define( 'AUTH_SALT',        '**NXcu&U;``u6N3r[i($4(ecn<:<89u0KaWD2J`G]%|C,^Ra;h^E-(_dh=C*aoK-' );
define( 'SECURE_AUTH_SALT', 'Ea>m8lsTRuS)A-C})Kcy;g*s>8e&:6]F9Z~!bjv v }}B#!v#4<X|E>lZH{y.64(' );
define( 'LOGGED_IN_SALT',   'AOlWN<kzTu& LKLgHqY!OJ!C)^@FontJ#nF4?FMTk,{o4)Rx8UG)-=i?1N:Tvw)H' );
define( 'NONCE_SALT',       '-+v!};ARg5[byLjc7z:?vRnUYRUW$8ev#G~L+?dGX:WCOF~Mo,`Pnc|T1|3B#~<a' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
