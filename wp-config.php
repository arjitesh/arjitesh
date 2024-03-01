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
define( 'DB_NAME', 'arjitesh_db' );

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
define( 'AUTH_KEY',         'hVnGR bh5*!MD}wvK293fpK8CY7BTti7KEmCPdc&RcJcTqyQ+2qBhjaT Z/C6]Cm' );
define( 'SECURE_AUTH_KEY',  'Qz/vM[3,fhf*zJ3g?Y&?Z$1SgrQ:RS-/9JU=js:&?Zy$%!)}n!UD-mTh#|BhJ-`T' );
define( 'LOGGED_IN_KEY',    'X9qbuT~,d6nE/Wk[(.x 53Q5XR2adsK7m7xA(s.|boT?#@h[l]-?b}V(FxTo]Fu;' );
define( 'NONCE_KEY',        ':p4NgYIiZJRF)P5fUuLD{7MZ{|dpoNem?I =4vUE0EP (:e]MaA@ld}SMXigad>_' );
define( 'AUTH_SALT',        '$> Zm`upzS>(z$I$m$&zWv6kI)@{9S9+#p!GKA.9jv~Sy;>YKG-P(/fZ#IT>2Ao%' );
define( 'SECURE_AUTH_SALT', '3T%xkMtz:AuybidoBKaYrdtugRn+iR3*g`6YH9}q|;mPs1t}8J7mTt#La~d(|J-6' );
define( 'LOGGED_IN_SALT',   'eKRA+(=+?&{Q8P#xy8touwo?nsFrEFmmpsI.HLA{Z=h=N9%Tw7/zUoC12R-y7{@,' );
define( 'NONCE_SALT',       'AHv,uF$.qwbWEco3x&LuDfr`D`3q>*#(~wGV$[(^>AL<`!<Jo-,6}szAw7l-Vvvn' );

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
