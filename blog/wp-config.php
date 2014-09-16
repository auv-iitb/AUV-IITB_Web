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
define('DB_NAME', 'auv_blog');

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
define('AUTH_KEY',         'ME[!_6VA=hx5kA~7CY$}3}ZZ3w.O,U3Acl]Bw:ePB@ZKseNcCfVv) ~M|Q/5/-aW');
define('SECURE_AUTH_KEY',  '7:j{1`I-%APimi6-K?EO&|z[T,p*g`=|DCOY!2w>Rxi-f7,*_ANc ||4<Fvg;`KX');
define('LOGGED_IN_KEY',    '/Q7/b?HL;sc/n}Dp:[>0HpgQ_r}1vRFbU8Y{./pY?4k#CY;`}Z;$o$JOJJo*h{u:');
define('NONCE_KEY',        'YGV2)[v,-BxN: jwBF;IK^rO:x8$I9bFI4BkHt%rD,BX=KNA`f:<J,vda|/O2(XE');
define('AUTH_SALT',        '-dB~pP+wN>Li2-*5iA*jn}Lg{4R)sDe5/:+Pt#]T4~6!K{D* n`iZPR>ecENllC`');
define('SECURE_AUTH_SALT', 'us<-9|vl}%@T#_h#D<gQp#b2|WQ#jN-/:x|iOlieRaV%E?EN@uYzK+nSE9Wr:U%1');
define('LOGGED_IN_SALT',   'l+FyAiYe&V=qsYyB!&Xhp+NC|k_;(~#a{9W~>c&9%|Jbp&|Y_:^9|4{&5C6E_BG=');
define('NONCE_SALT',       'fA`<w6bOld;8(5m&WP.,y-&174T?Pi/rcTum-TJQ8fo5]PG r~HA{c[F63tOvxdy');

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

