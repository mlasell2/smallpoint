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
define('DB_NAME', 'smallpoint');

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
define('AUTH_KEY',         'HH~XG~:DR!}#?6V?ZE=$~uc3w&$[MChMu2[^:Tv1GheQvt>H>t&|@2!%gJ|Ofc&X');
define('SECURE_AUTH_KEY',  ':STy|Ax`K(P&e-+0FYr,rM0tB8!)12R)_@m0R{:u7d2y}Ss_b6]z_O%<[7&B`Z.l');
define('LOGGED_IN_KEY',    '@??FUMHNhoAX9X;yy |EJsKNCiY,jG|-cc)U.G9k_hjKLPn[<yI-1_tj?);):qNb');
define('NONCE_KEY',        '83T&xKGVE-~(<==(=FA9AjaVN%(/9Q;R}vIe(2hw)D88WL24b?x?LS_?#A+X-/c9');
define('AUTH_SALT',        '6=FB22+)RJHt&d~W6EQsK>Uu2.>iTDzZvMAg8u9RCix]8d$~m=rPhG2Ko&y.tF._');
define('SECURE_AUTH_SALT', 'L$etnj-(TyZ?R%1=5Ld%Cwvn6.zrpQz`9Z-7^TsBcU5Rdn{D$O%Ab8ahF(nt@wsn');
define('LOGGED_IN_SALT',   'fwY-+OKa&ry(x=.P(.j*}e~pZ0Dh$[#a7B6TEfH{?G;o8}KBqCD Q vTP{_=JQ-$');
define('NONCE_SALT',       'bM<*2mPu+&zab;.Qh]8`*O3z~kC;gC(o pp6tFR3l.p0v:#nqf#=FL%wccJ=r [6');

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
