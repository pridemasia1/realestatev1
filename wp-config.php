<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'ITSEC_ENCRYPTION_KEY', 'W0FSZWFOMUwzWCptOlQpVGRKfl4+YkhVRS4gKnBfQnAmKlNaUHFLdDY1YWVycDhzfXppfTFZc2A6W2VbXzJRUA==' );

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pridemas_realestate' );

/** Database username */
define( 'DB_USER', 'pridemas_realestate' );

/** Database password */
define( 'DB_PASSWORD', 'MyPass2025!@#' );

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
define( 'AUTH_KEY',         'jmC8f]q7u8VJ$D6x![tR&s C[F|Z<t7qqE-YGtE!a|wE~1RJ`Fwfr<j{mI15R^Ne' );
define( 'SECURE_AUTH_KEY',  '[=v!i<oBPLtH>8z7|($r=Ktl#0%r7 0>JqhRr!Cg.84t.v>B>v#pCS.vy/kG@;n-' );
define( 'LOGGED_IN_KEY',    'Wj.PcH#M3FG08UE*#iMPP,|7h](l{JVufi//6cGdr ;kb(i=VztLmggAg:W`)/wh' );
define( 'NONCE_KEY',        '2Y]-* rbHEp90h8jx6Q0Xul$_Na#*r~b_+vI?V;sGCy$6#&@2UGBd=PSZH%bce$c' );
define( 'AUTH_SALT',        '5xG{z<-_~F8MEpd]CGWh+k[HHH=1(RqTPT`l7C=L/-%kpz@28ez%*U?UPln{=/m{' );
define( 'SECURE_AUTH_SALT', 'qJ|6R%_a{@_S5}U~[O4*#(hfnr+,:.<8o:A{=[AAed?V|w[flc?%JDgdkIU?[f@M' );
define( 'LOGGED_IN_SALT',   '3h/Ev=1hfldV+7Y&etA8`ld-0#ba0-Qu][IeybL.A}(*r_)F[2p2B@6_rK{B~4:S' );
define( 'NONCE_SALT',       'c0XOf2H3X>]{f??}9OpZlhey9=1pCu)wxMO*Xe}bQ5J{Aw,V~}d.mOa f~:X2Z5*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
