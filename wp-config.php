<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u180770753_wy2Zz' );

/** Database username */
define( 'DB_USER', 'u180770753_RPsAH' );

/** Database password */
define( 'DB_PASSWORD', '8JVsupTigQ' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'DXOSXIN1c~q7yIAGEQ%lWV&M:,?BU3-7dZb#YUt{A84$)C<jvbIf!?oty6a]J2Cb' );
define( 'SECURE_AUTH_KEY',   'Vuy~glPHocc4lT}{[:sEQ^$LBC*ku~C84g;4b@%*yuk`~NqgNGDPf6r4Zd[t/`4>' );
define( 'LOGGED_IN_KEY',     'va_M}UxkSgeX&Gnp(}vRNQvyK-$zXB7&G@jtHk-XbIr%r@8Ew8G6{wbDn-6AqGP?' );
define( 'NONCE_KEY',         '&vByW+e&Vd_]}x.F<SIL)Rz-t !TX3Zm4}@3&}0HBT,vFN0<4Qgur-/6~F,([C^Y' );
define( 'AUTH_SALT',         '#sgj=W3PUoLb I{:v#:WDQ1Yh9>Z:;^t#?@{H+.lq j.9S9OzwZo*ZDp;kUR-DbO' );
define( 'SECURE_AUTH_SALT',  'Npgevsi5%#;gNpAcZbHYvwylAroQh~Nf-gte6,n-)[xBmeE.;5j]e/FE-6/R_M9z' );
define( 'LOGGED_IN_SALT',    'ZS6P1o0>3IVp7ca@vir9F;I(E**o0REH]&6*yHHlq.3EIuD|glURZQ;:Kg&MIN$0' );
define( 'NONCE_SALT',        'G82NP>y$rAux/4@IxADc.$l*N&koG2*7e|}Qg I;#BjK1Xs#y*]wy9|X93sx6!IK' );
define( 'WP_CACHE_KEY_SALT', 'V6=2=4EsR a}p6ry2QRZKok/>^1%ax%z9|lA{0sE%%Bf$o +kK)OL!}_()7^<=US' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
