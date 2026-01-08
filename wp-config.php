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
define( 'DB_NAME', 'BBDD_wordpress' );

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
define( 'AUTH_KEY',         '1 X^Em<@&3hufh*U+)mgTML+>zaL1x8MvzKa?BC,)3D2*:W#33A*80~1=*Q^*J ^' );
define( 'SECURE_AUTH_KEY',  '2^i7/?|.:4R6Q=kG&n127(.n9Gq_DOPA.>T~Io3_.ceI#9g8NyX!T<1HbC6ysxX{' );
define( 'LOGGED_IN_KEY',    '2>%p73AYdwu]SSL{pt0{=dZ>Ed>Oy:,}HLz~Bk)HIx<A0+21wH9QFW.k8K7{25uS' );
define( 'NONCE_KEY',        ')+lxf`ou/![5*v2v3u?)=PyDlE66^C;.w7i]Tw.rGH;+UeP*>dt@=]o9k-|pm V3' );
define( 'AUTH_SALT',        '?dT$O+S,IT]a=l|~@[Ga@HuS3]S$XOeiW)sV@&i-+g6k2xV$nu0w6*+S6#Jh%6Ps' );
define( 'SECURE_AUTH_SALT', '&36w%9]9lmkK]CqWs72{20;0vxtKADDF m}ZXw;(|`%V1J5R?qnvdRZ}C9T`[f&)' );
define( 'LOGGED_IN_SALT',   'M~gkJrTiDlg_H4!228:zL%~6Tbwwm{mY&AX27Hl;eYq9c3p9py$ CIp4Iyuu%C/=' );
define( 'NONCE_SALT',       ':Ai]J]!oQ/j.TS2Y,Oj~:ESH8I>2O%P/}w*L;41*pF+~w|v>3-,JeZb1c2kVG~mh' );

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
