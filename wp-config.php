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
define('DB_NAME', 'spiderjournal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'koothanallur');

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
define('AUTH_KEY',         'gBh+5_!_D/P=a:?lV>XT%NI~B@t~O.PdsP^0;C$W=*9zBWgzc[VY~;EVwwnVa*71');
define('SECURE_AUTH_KEY',  '!9=fE5%*3Q;q P;Z}}wljPw)hQI.o#x0j#Jz*h!h+EiW4sn6CFDxp_3D&M.QMYem');
define('LOGGED_IN_KEY',    'U:_vi#:W_@%^_F}^5f{q#V]gM5.#<~fG6znsdU VtdzniJ&>W1,&@yJzBu 8@uUe');
define('NONCE_KEY',        '56g]0w`To^K9$b*,CZH%JkH1%<I`c8|Ae3*5*+p,fqZey~97Oskpk-f=pAb+I>CW');
define('AUTH_SALT',        '3QSg,4Bs#6*Yjx~PibaG|j.x$b]cwY~2!Osp/Fmz?Urtv.Ybh^#rbtvg(TU15xuv');
define('SECURE_AUTH_SALT', 'FF,bwfo@%&9XZi7[@sIpKEWO9J[ue kzutwt@(TKp$@Fm>!)V6IfPT2AM8s meQx');
define('LOGGED_IN_SALT',   '.sT!B1YFj6Kfy`d>< Y}KSsF/p&i2X~1PQps~Nc.OjuSDYR%So-/)ApBgad[-0<6');
define('NONCE_SALT',       'L?P`ycy9^qX:b3Xg%B,p,[/k$z9A+[jH*[yr:WI`I@pxr^W)jqUA,H?!hX]to} _');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_spiderjournal';

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
