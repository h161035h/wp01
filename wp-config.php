<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp01new' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`S}%hkrVT%_JK:|%`qjjIve`Jlgv*vj1[i5:#m`p?e@Mzd-*:H_I/VW&~}B;rtYQ' );
define( 'SECURE_AUTH_KEY',  'o[V8k]s)D,TA]og<Spx[*8BhII0wh~_h&vb29K*2(5}=s:m}2{r~4Mhq(]%x<.W[' );
define( 'LOGGED_IN_KEY',    '~fr(2+)v3m7s5;%b(=ki`eW=ba?,;5IKEfB#]@-|a.(A$*2NO[|a ;GuQ3aidEW!' );
define( 'NONCE_KEY',        'gx2J}RWyz?rgQjG?w<u`9-f,c&z,gz|EHS^Z6.4J]77}x(Zkp!9q4{bpl*lO?V^W' );
define( 'AUTH_SALT',        'Ic!EbZ{P_BIiHSRs4TRO$(KFiY7A/RyRj6$Pg#* p[,V0<S1KQX8W17z/sf7n2N#' );
define( 'SECURE_AUTH_SALT', 'SzDFo{f$]9x<18+b: [tt rHtKJpkWe.i`&}3*)R?DB8Lco-B%dz1b5o=6oL}0@x' );
define( 'LOGGED_IN_SALT',   '3)(Mc};rZ2:,[4i>!j `SapgfA~7XnZT ?;,KEQh,,v/c/w>K/^tfE+0$RS1*1h4' );
define( 'NONCE_SALT',       '/:]1%K@ZZch~c;vO^V21cmg(8>Ir$x^CEgw%b/AEccC@UBpad8#g0k^eTYWP].Qw' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
