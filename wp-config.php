<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'my-blog-narciso');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tRdr9r{5^{FW j#9r+m}~XnEg$/,&F&0t-R`a9AuE`]xPj>KL@>9;TB^S,&w%.C6');
define('SECURE_AUTH_KEY',  ']Zk&,C|xiDFG_3JSM6f-QUqmQ;jSlr_?5CQCZr^<SK3nwxe#xu3l=0n*q{wic{}c');
define('LOGGED_IN_KEY',    'gi:WL<:NYs0MAMV0GC{t;CV(D+UbM$Vc{#jh$M-$9;z[]c~;@0(.9+In/E@`-q!l');
define('NONCE_KEY',        'F0daoTXQ/:#,-_E!Og^+2cZWJ-h)iW-Zk)-[0}Far#A(VRs062HGpLxS+tU]2)-v');
define('AUTH_SALT',        '~9}IggP>S] ,4~xzdL2}m}nrM4l,NnkE <V7<nZW+L~Kp?*-*P!Q[rLWu+x@2+8k');
define('SECURE_AUTH_SALT', 'R(`AfOD;;*0w8A%E<U-u2fM_XQ%^/jT6qpT*[/oM1O@sLTQIRHC$J%(6D2_}#b#C');
define('LOGGED_IN_SALT',   'p)s1~duv3L|kp6tQQS-Ss<CNtcK{DD8(*<{->6!L9f2iHcemk]o#9lbHQ.ym=KsG');
define('NONCE_SALT',       'j+)|;oz^>vDt!B~+oL;dO|%gd6+C(^JgU/GnB+;X;EuQT22~lZ-e&efV-ZXqSIMm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
