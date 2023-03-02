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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webperspective' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '^t!lO^=}Fb}P+Z7A>l=5z!VV3y?fIj;DwbP7WEp[h~7!Fm&HnTnZ6uq!P^9=DHqg' );
define( 'SECURE_AUTH_KEY',  'Z*[w6T:w~zK(x/BDH1hc[8zSCbXV1nTi~rU+T26@cp `|?b(c+lCo4.ZEQInJ#^s' );
define( 'LOGGED_IN_KEY',    '+H@a~Qv8l$kZ,n67SV7EOM)y2d8m0G@[3t<c$uE{3%~q!$gUfz}!/wlZ-A=xO0lP' );
define( 'NONCE_KEY',        'zFQ`X[_Fox]L*vxW,dBSa:afrojtnQto^7?|.<&rG/)8M;qt=]$x@Y@(yI@psD)k' );
define( 'AUTH_SALT',        ' XXxXr(vfvRRO4{2|FTF6]YsVyj =akt%);/XLk[dbr&A!S&V{Ll]#9ke[y *osL' );
define( 'SECURE_AUTH_SALT', 'C3vtHo$;*!*4XLOXd{|u(Xr9Rl#@)iho5>g2{z/HMZ10JA00!U |-[]87_#W{ZYY' );
define( 'LOGGED_IN_SALT',   '&LanO_h.np:98tkuF?/3,_:I8`P0%6}if`X;<CJ}y,~=>%=cxF^|X(lqosIzI}c1' );
define( 'NONCE_SALT',       'U}*$3Gaa2J{7n_yM0(I4p<4O3cKoTWbH!^~v2s~rQl*iTPOOg=3`=R/Zjy4V(YSg' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_webperspective';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
