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
define('DB_NAME', 'wp-clinica-medica');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'E+9@?Ab!l(8aC#U4,}s7_(w!4#1>XWh@jcGAClJ%%HqEa+^i3zLNMur*4(EQ7?P8');
define('SECURE_AUTH_KEY',  'zTVwm6e:CHWao+ fNRwzT~ml$,H?PbCB-b+C}|HYz_bjpv(*mBb1io97+Av+]>03');
define('LOGGED_IN_KEY',    'yFKIYrp+obJoq)5X(Zs]F-#|dK1 -3o=T9.z% c4qtqj[IET,Q>~tw4@E?y%Rw&7');
define('NONCE_KEY',        '<YM?^>om(c@*(b v[t[iQ<SmQmp<~6^|8tKTi;Ul;5@]%sh!fSCk@L:ycijC#9}2');
define('AUTH_SALT',        '#C =$VrAAU_id*X[*W*#O#7J~I6+bB[7TI@z:yzH3/9kG[-+)~.-UTv,M_tG0eF.');
define('SECURE_AUTH_SALT', '))`>s!V2)N;I|C2GQ{` hs4K/Rsl0hd&4Is[D!{RhBcn/oLr<u5-){7G?X07>c[L');
define('LOGGED_IN_SALT',   ';eohD]^# zba4nU1c,OHC{FaS6kM@abhW+1j2+(D~kTh#Ls!;aZBJBO&Zg#|rR;d');
define('NONCE_SALT',       'Lm9`:{|XMg|Ne5K<|E97[EPE/fm:B3<1#wnQDXi C?FquJ`UWB~mW;cg$KA*cZYa');

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
