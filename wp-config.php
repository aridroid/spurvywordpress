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
define( 'DB_NAME', 'spurvy' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'v2' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         '!u:}h|W]VU(|~+J_8uAP[Kq]7{GT)bsKzkYS_( s/|80p|r=E0AznL2=iH#mSnBP' );
define( 'SECURE_AUTH_KEY',  'rHAw{}a:~|tFp ^sF>`7fod/0iG&3nFg|K#}qgUQ-,qd!6aD/Qi;PZ=.:O>6}m[}' );
define( 'LOGGED_IN_KEY',    'rzEu)E2q{xI.}irX#^x?]CZ&F[h-y/|.N).[R?_;t:O!Em%coGkQE[57Un#-HdCA' );
define( 'NONCE_KEY',        'Q!8.Rm`_T{[NXGH~zml.aFm!&q,^{ @Ew}PCW:q3btp!{Pvkq%r+)mIS{RuyAYs^' );
define( 'AUTH_SALT',        '927L]~%[NIDy/oxe7}`..H)}?$QQu+50B(xCt&0rRxYP`FdcCC$a_,Z,PN#qB8e:' );
define( 'SECURE_AUTH_SALT', '|4 HGdpTiOzHjf&B[`M]XSx:!u(Sgg n_Wkyn`P([CBU>_3/Z5>x%lm]#G=$04eP' );
define( 'LOGGED_IN_SALT',   ')kbdG7aL}L2UsZxk:uZD<FKkyJ1B/a2m{F}~5:k`G-~:9>xFdyY}Y/6c4E=c{*X(' );
define( 'NONCE_SALT',       '}0|$kYgk_5B%;hE9f`zU.NMs{C)zQ(dKMr?Swq.}#W%haw>Qp3bpa=+X:Az311=}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sp_';

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
