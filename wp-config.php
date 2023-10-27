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
define( 'DB_NAME', 'wpgym' );

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
define( 'AUTH_KEY',         'u9`fI,xWmP5utR9jUID3T=&d>5r>i~H*:,z2VQhvRdZ0L2px9b4;1Dc;%.~R[8t)' );
define( 'SECURE_AUTH_KEY',  'Vig)M{gL<!=@}N KK YFxB^X`%Ff16(u|/hOYH)2B4czH@}0[Ej)/RU6(BmB65eX' );
define( 'LOGGED_IN_KEY',    '&5T17EI;BfI$oI.J}iaR{wvO3LT0h<<4}-DLoh(b9>01>_A&yl{Hi[Z^Am.Z]0|H' );
define( 'NONCE_KEY',        'V;CUtC!zm.fT/LL!%ih2=zNN3vG5m2p53Bj9k`ZpGP%z,=r4xj[ED2*#MV7,XwYC' );
define( 'AUTH_SALT',        'J]Y@)T-oUSAAm)F%%Ri5IO2p9a/EHFD,QF5yxR6n5dSR-YIFZ?c@Hj5@U)D&tj|U' );
define( 'SECURE_AUTH_SALT', 'CXjw6D#Htm-6-wW=:B|XX<J_{b,H]/D<YU2[G;}^r)Ix/Js!Uga3CWYhZoD$Cv<#' );
define( 'LOGGED_IN_SALT',   'Uwb#>A]qbmkSUCnUV3SnJAif.lYvgxiw]&wSZAhJLguR5jfa_4w3F#^1~tvzVSw+' );
define( 'NONCE_SALT',       ' 5U(UP>=m&oStN:R0]V(6ME0EJ9lgBRfs5W,x?f7TEqN0kT?ce,3gh54;09G_f~(' );

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
