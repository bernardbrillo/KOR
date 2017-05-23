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
define('DB_NAME', 'kokuryu');

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
define('AUTH_KEY',         'C!s+Z(}H@6-V0eca,W%uR]:mod^V#F0B@-As&&cZBT)z$sLSjjUS.8`xUPZ]BUI;');
define('SECURE_AUTH_KEY',  '.AY5ubZS-Y85|S7C$tOcw,`hxocGaA<8hfnTdD+ira]APgA7JcsIA84[rKHyeJp?');
define('LOGGED_IN_KEY',    'Y%=>UviC0Sk`I8YU&?s >#LM5|zI~p~pmT#lv()YSQng)t#`8a!t(vnI_wpJ 9Od');
define('NONCE_KEY',        'f{L88(@.o-IL$^L6}fOsVLgvwsr0/>KD%zWPNw8%5nD*[+I2(/y{spvSq.!J8>QD');
define('AUTH_SALT',        'fEL)__VnL%?81>%S4,y+?P:.?G{tp)Z;d10s{]CX:|`V6~?XB-xa?M21JRSQpev?');
define('SECURE_AUTH_SALT', 'J0@9wq4_?-H+-U,&%GF=e(0VFu]8Z}9B@NXM?r<xdwQBd0RR)mQ?_4lK_nK*<v36');
define('LOGGED_IN_SALT',   '3xGS=T=Q@>JW_pTy>9#>3dK,iBh9v Gp. B3 gBg$m-OT!HqnNL,tHn9uO@Rrkqj');
define('NONCE_SALT',       '~*3/0?.? B%,)o!wh|[=`T^YiM2<a(;YhmLn_PGfq7k[t7UXH@ejK_4.r6q1+.X[');

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
