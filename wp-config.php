<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpclinicamedica');

/** MySQL database username */
define('DB_USER', 'wpclimed');

/** MySQL database password */
define('DB_PASSWORD', 'A8tyGCjJXENtTaDD');

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
define('AUTH_KEY',         '?e}F[5k~Y|kw&F@j=h}^V7mLIUnV)UQ>*c*zu`J/dpRBxcY%U c>u|^{`@P8dwx`');
define('SECURE_AUTH_KEY',  '5$=|N+N;tzkTX``#:0qjb.PC7L<E{$|(ohZ{+ux|p~l`(G){i!8g?Ad-:U:7X[Pr');
define('LOGGED_IN_KEY',    'j|h3wm*GH1%hUwYuz7iF)ZxG82SOL/CDIQwPV/+But^V}lYxD5-K*j8CI*Ww~)jJ');
define('NONCE_KEY',        'zNk=H<d~fP{ ivpe~!tA3l$fELGf-Ad)Lx#P.dIp>a7:Va-6#u[5Rj4b@Qi*|&vj');
define('AUTH_SALT',        't(+X+V6=du1b.g-Y[sh?1U.~#2>seEdNh&?<WF+ hXIM6Xf66?jK+wRJ;Ez7-9F=');
define('SECURE_AUTH_SALT', '#Dg-_I9lW-j|WgHD3|slZS^y2neq^x]A0-l-{d(F_+#fn.|V|ETdgQj-+EdRDs3S');
define('LOGGED_IN_SALT',   'xw~9@,WzRFI;6 &m=u%7N<A5nCSY,g/unJtk;.S?o<.q +zB|0t+Vqw~>ly.V#/@');
define('NONCE_SALT',       '}%O|f4elF|x62~~~.^H2Jdv`76w}-w3>YkAbtnY=Nz~3 N#b[>ML|PGV^YSsg<|=');

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

