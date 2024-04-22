<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'movies' );

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
define( 'AUTH_KEY',         '$aPWLEll;&p_mYxHCfB}$`MA/5^h9/[-<mdyFiJ=lvQS~`zrKdFK5lD86]1GGHwu' );
define( 'SECURE_AUTH_KEY',  '3K:bYKprS(C8Y7ahCU0ZC 3=!|-Z;VO!A ^@AHFDFh/_;Sp#SxLt[Fg-:h6x59an' );
define( 'LOGGED_IN_KEY',    'U7OBxm.5JyO:hZ5:?*wx=]lqpJ!VWa1nv%2Pift&L%L|xHX(!f.>)8VjYXjIf]1H' );
define( 'NONCE_KEY',        '>Bb>D%8JB`48z]-ZrzYUordl@Eh$,/lGSVZ$j?(poCSFRqS97feu|J}JK3+:4Rzv' );
define( 'AUTH_SALT',        'G8=/i@-L13W~ntD=EI<LT@NY [0FZu+t;QMbPQ v=K#[LDh)@2=-I*H7oF57{&|!' );
define( 'SECURE_AUTH_SALT', 'BtB&OZU^p4+?`<LqOUw71VSS1$tV:p3s@G-M;U=5wG!/L8Oa%SU(&opMUw!LAhWt' );
define( 'LOGGED_IN_SALT',   'F&vHlR(G+XuR2f?c9~z?Y}_+D$J=0P@NqV14+Z[p]CO[Y-6v:-8(yx:{:v,br<z*' );
define( 'NONCE_SALT',       'n(0x0~4HyFFpF~T!WI=6qZ^4$b=+.9tm{RcT7P4D!Kgg_-P&Zu/n1@#GdEVVM!ve' );

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
define( 'WP_DEBUG', true );
define('SCRIPT_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
