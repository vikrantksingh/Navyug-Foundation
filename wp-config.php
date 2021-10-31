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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nyf_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '5ryU()ZTMa)?XRdO=~|@6zsTvf6j8=3E}Gw%1Uld;0-n_zvxlL-ibSYo=p##Bj!w' );
define( 'SECURE_AUTH_KEY',  '73~!#Ycm7*A(Us$nmk&NWH~>XZP9Y9Vu1ce%9|iTTAI>hwH*gUue>de<2ux@yJNQ' );
define( 'LOGGED_IN_KEY',    'k9ju.{)l3-%H:|C?M/FR&/bT k}te4XUbXN^#kM7*=rw!,u@vmYyfV4/VPax -Qx' );
define( 'NONCE_KEY',        'WT`}{$!ZhsH /.2?/a<$Yfo4nsTX_W_coFsK/bz[YOR=dRIf.H,jp0Lpl<}q,Mj!' );
define( 'AUTH_SALT',        '4W{e/0HD70aqs{b,6_2aUZ:X/eS)%TTBp>vcM;=^u2SlkP%%k~E8Z<C[<v|hKLzl' );
define( 'SECURE_AUTH_SALT', 'eqI@gNdvSaxzQo:[hnJ:N_b|~bA|(MF7eqy%1$:c3E`9*f$ hi@[b2v)F9%!l?XS' );
define( 'LOGGED_IN_SALT',   '=^w,O%15x`T$f p40vhA{&%[;duOsfO{HC5Yx{k{Z-1r]1!xpEjJX;ZEeIq%oTA*' );
define( 'NONCE_SALT',       '%V2XO]@x3)qp,& wU=.}C@Yh)g8,*vx1KyAS9%FNe#9,?%^<1y|`Op:xo-$l*],p' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
