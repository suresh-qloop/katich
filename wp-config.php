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
define( 'DB_NAME', 'katich' );

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
define( 'AUTH_KEY',         ':pSe#Gd=JoEe{`P7OrxU O~9FS{<qxG(?u_&WZ`n[M*Y|7S(vFB]5(ZP5cL7tm`v' );
define( 'SECURE_AUTH_KEY',  'JQ3qp3*/Nc(U=+^}:a5Asj@>T$6VwN;]/[04|Ahgs>Fa=)UyP?MWNJrO+?|$>j/U' );
define( 'LOGGED_IN_KEY',    'A?o_%u@|l1-LI aeTe57d.EzpdJx];Na:l-9t[3iX5WhA;R#Lu}fbF|QXM2?!|{=' );
define( 'NONCE_KEY',        '|^!GA?y@N4f4[8XrnvRdGGO:GuHuwKpi_fn]y^?la;J@{toL85(n$Ht4YMA,{]Rs' );
define( 'AUTH_SALT',        '_bZSOv#{{?p%3a_3#Tw]q0@!]b<A>m_e~6kVx.zxSjBU1Q]v-9u-0v<j 22rFZvR' );
define( 'SECURE_AUTH_SALT', '%o/.*-z0.jB#4Hb4d-awJhv>twm$v6 a:mb}B:M`Ez4WrXWl&@*&=}xse^?3oeMM' );
define( 'LOGGED_IN_SALT',   '!V7C%zvN2fSf{n=-#?a8QQRxzkL]_aP2JXV|k+)p)!3y`DP1aS$3xioXeqJqyJ1.' );
define( 'NONCE_SALT',       '~J[jLEHi@Mw$).(7b_7xfe|PkrZ=FL@q_Oe@PJIN^&Yy*ks])TxO2,N HYzWAU).' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
