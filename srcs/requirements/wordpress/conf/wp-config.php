<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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

define( 'DB_NAME', getenv("DB_NAME"));

/** MySQL database username */
define( 'DB_USER', getenv("DB_USER"));

/** MySQL database password */
define( 'DB_PASSWORD', getenv("DB_PASSWORD"));

/** MySQL hostname */
define( 'DB_HOST',  getenv("DB_HOST"));

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_REDIS_HOST', 'redis');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_VrRueahgy&@xM/o/XT(jcfd4c{R6BQY=JQ`#IcN(BpH!0arvfuyW+N;FG|s k0s' );
define( 'SECURE_AUTH_KEY',  ' [QJ[yK &km.tqXlWy:wZ##`aW]k{f=8mAa&nz0dCLbt6is%xjcovxlS`~@ZHz{q' );
define( 'LOGGED_IN_KEY',    'Z}h^FHT|>!J+vr4XqjYC0svFL72/`~6>c },dkvy>dr`|L5%e_r&WXBScp^);m`D' );
define( 'NONCE_KEY',        'yM:P@y$D)1z0I?ewOIE>7D0*sTLYuSw8/v+0j.zeN7yg20tz^|B~Rc)cu@{BOZ>t' );
define( 'AUTH_SALT',        '/7[bWT]tjp+vp14n!]=ky qY@POOM+hx[P]J1{FFNH7kY1?5H0SA]rp-W)LQd|&8' );
define( 'SECURE_AUTH_SALT', 'u#H~]|>mIS0~2,<14g}QQcVf:E6VfvQjdLw>7m@b4+X HG`3cY._7+|nlfS*7bkY' );
define( 'LOGGED_IN_SALT',   'OL%}+[:@lCfAC6!Vn;L$r>t>ke8Cw5gAX:_}[Pj{[]Q.*L4fi~xv$U`0BD0l`*Q%' );
define( 'NONCE_SALT',       'T|63x{g{$nou]6EP(]C)#sz QQp72%ElitiPYTYSppyBT# L2DFSn5a)Trvx6f-W' );
define('WP_CACHE_KEY_SALT', 'string');
define('WP_CACHE', true);

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', "direct");
