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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wiwy_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'MAZZ^1Aw`SWj-M4m!.#}z`%g`OecvNB.DMe=W]cvF1QdieY*p-Qde.hlhygh{_/x');
define('SECURE_AUTH_KEY',  'RQc2;KqyBf;lb9!2|>j]$KN}T<bQ24V3O!tC@a}S?uul}f4W$~uIFt,*07O|/r5a');
define('LOGGED_IN_KEY',    'WbD3=kp_T#p_Dt[}QO^s#n>Vx#y;9^X QHn+MM]7gvgA9tweivTaZHu^fV-d174@');
define('NONCE_KEY',        'pqz7(;gmOJS$,q/8k(}H0&^|Ju_o}L=ny}%gijI,<**d2=Spd_nN$x8LeSq%QzWT');
define('AUTH_SALT',        '.u_#tY#u%gBJK=oKFX[5|sK]mkXi@8YL<_=y0@(<Gqao-I3`vx59u@le&|!iUuP_');
define('SECURE_AUTH_SALT', ']/+4[+jT?F,PYVwE}9`n(f_Bc?2gr>.K.iv;d Bc&c]EKM^nIXtR)HSM/Lorf,!O');
define('LOGGED_IN_SALT',   'O+xJo||*dQ!,z~4rFUm)3gW1@0d@nD%SmaCXbu/9bG>k,C69{+(QphS,:QY-.b|b');
define('NONCE_SALT',       'V#}=xoE6d]n8jY^QS^N{ryft|FFv2 $P&%8>g%$~a5M Z|F&ZMw7(F|wm:VUa|i~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
