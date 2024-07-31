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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\planty\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'VO[uqIy6})Tgj>k({KN2C[v@*g?3KjXU=.G!Jg/.9U+k.o>2=`jM8qJ/tkl3wwgC' );
define( 'SECURE_AUTH_KEY',  '(O]72{HQ29ThPK]4W3OM%RYZF)UdZU@<<};H{`a~8YD1mG$w> I>d1,aI>^FXRK_' );
define( 'LOGGED_IN_KEY',    '2wCtO&/h{9RXc,yB<%UrG<0UN0sDpFk?/w|Ima$oWC$zlF)3:UNMH{>6/GllsFN`' );
define( 'NONCE_KEY',        '9D2h]-I=j9shvLtpa IYK|[p?*Hhr<f/wfh|_bg4Xyh?u%{XBYBI^eu$knX]1cr%' );
define( 'AUTH_SALT',        '*AM[)+K53(T;ACJMz`5XVJ4wx$:Jo*2 J5gI5/6R;<zv}42xU/ <|`$>R_Q.D;uG' );
define( 'SECURE_AUTH_SALT', ')(E$Bd,0+jX)p=zP9ejZ;W+Vw6y#&4kE R_01?N|_x&SPiYBMNUUQG[G,Js]ly0]' );
define( 'LOGGED_IN_SALT',   'je^J8dSNy]H]Ld3v6*{Vm_Jj|u1=jV]G}?pN8uyCEX{M_#4D<$q5.I@H4*-Qd5AM' );
define( 'NONCE_SALT',       ':s(~Opwbm)UX}G>A3_xIe`YlT =T#WnANY{.X&{S_E4]NsT0ktC.LAwukZUddlMv' );

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
