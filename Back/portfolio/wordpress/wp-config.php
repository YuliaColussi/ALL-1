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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '& FrV5OWn%x(hH*pG?U,%9SR/0v(/UVJu8_L--6Gs<%|uN&x)AxM3>ZcBJB5FIKB' );
define( 'SECURE_AUTH_KEY',  '2yPkA1/a@3W*%FzEK=f/Y!)mJi9kVXmKBq3/C.c,Ey@qjX2|xXt98/8L/hL32xJp' );
define( 'LOGGED_IN_KEY',    'aO@xwwo/uAXu^b(X)M{0a$`eIub`_W~X`,aZ6H}vxUP3wT%9Xm9>yxSxQWw1ep5e' );
define( 'NONCE_KEY',        'P*i eNlDHHzj}wdg8ATiWImeZ DsXYN`.<8:^.;iqkm637km_6dwjJ:^im2>Yp&p' );
define( 'AUTH_SALT',        '8Gch]V`p%l]8x;chB=B-p~/u|-5I.t)Mq-J::IL,&:Z0N`Aa[-F}WX+47EW@,CFv' );
define( 'SECURE_AUTH_SALT', 'k yRF[M+I$<A.Ykp@*&ASOe4&@(oN0 #YG|B^?8rw~Y&Z=ndsl/n6G&J64 g$=Gw' );
define( 'LOGGED_IN_SALT',   'o+l5yvB)dw5Z,yHf;A~>MyR(~Oa8FcFJwvR,Jz63ojIA1k[[VFMaTcX-G0=8R4P7' );
define( 'NONCE_SALT',       'fEQd#78^W+N>^:ygsk?x=nv;XOUVa{=11wW%CW!4r<xLLo9:v$&(Pj/RgE,^_km)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pf_';

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
