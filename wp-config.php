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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tensor-bd' );

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
define( 'AUTH_KEY',         '<dRhLPGKkSckHNkL;lrLOxt|8*pm|JlOQ`h)E`.pLq]e p#.[Zz76e7SC^k@A>^<' );
define( 'SECURE_AUTH_KEY',  'WG3Y=Zn= xp,;Oep>M04/(pU-y4H)EBrxva:pFH@XWU2=ZK%X*SP(3{.4P]:L]}3' );
define( 'LOGGED_IN_KEY',    'w3]D`}HTK2294s]R5aD{ Mfk%$Ly+MG5#m>Tc+$&XD;1LyY[]&3n$}^KMq$y(~Z~' );
define( 'NONCE_KEY',        '{4|6O:1u>J!I)2wkTQCbiB5ifWmx>:[ Xw,6ya/;~4cA`:J22#[]*8+k~:j.A*fx' );
define( 'AUTH_SALT',        'g|R7K$m9*UgF$f%uedYJQu-IKeXH?i_({pTJ1SfBr::@tHx l>WhI cF3LW?EP0a' );
define( 'SECURE_AUTH_SALT', 'qaIiOS+T5vMv,D>g=H0B81$x:C{]Nfhr>CUqrjJ|XHJ=p,<`Wmm!QaW)+*&tMOyo' );
define( 'LOGGED_IN_SALT',   '6{20_>?_25?MG,^SrS>]6A 3Rd}W? 5sQ!;H@.]K5{$KgadVP=6HoL~Zrs%{k%3:' );
define( 'NONCE_SALT',       'ol5CiX%!:/l|:$nRzFO|^-qD!Ymy4:qwE~^;x1k|SH^>Bd==+6LJUa2DWg7NQS-4' );

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
