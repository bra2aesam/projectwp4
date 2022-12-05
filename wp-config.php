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
define( 'DB_NAME', 'Project4' );

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
define( 'AUTH_KEY',         ' 8t45&Kr2``edYToGX.(B9>eamX%a,*DLvGE5^IK}nTyJ}iRt Bw/<f6+;@1%N]S' );
define( 'SECURE_AUTH_KEY',  'tWh]q=bDH%}>Nepfx+Es1-fb;XT{p!tQ3-Hgv= pONqEzwhF)WsW.w;SUqP[5|^{' );
define( 'LOGGED_IN_KEY',    '><VE_Q6T>q0!m2=: $IL:%W-T%vgz<(v^b`ZToR=8q9-+FFcDzLuqCL:& Eo~~lb' );
define( 'NONCE_KEY',        'RFJ{HZBP?]6i$Em7~qPzD%QBa`%pHitH?uiKX;6LthVDDHC y$|+2cT.{hf^w&/4' );
define( 'AUTH_SALT',        'OuLWNeg_<RB{F-*I+B/C]Pi/NG&p]=pg%wo]Jh{Lv#b`v]`_S%&uX4FqeW7y +%v' );
define( 'SECURE_AUTH_SALT', '!Kk0bZh7Q#7EvmT/S/2I bpXxeB^0piQ78@IeT8Ev.{Y0Yg&>#(Vsu,wD,Eq3TcF' );
define( 'LOGGED_IN_SALT',   '-EvoQh[x]Q#.ZI`NI$|jt+nb?ym(A9esb>{zn9-yV/HlLECmKh x7e}V`sPYB~#j' );
define( 'NONCE_SALT',       '.%5L:6F4@]b+;KTBlxznAL#1nL%zj}_k<iMeQDDHE}~l]m+:]I $@GD5/O956po{' );

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
