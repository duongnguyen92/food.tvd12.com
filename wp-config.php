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
define('DB_NAME', 'healthyfarm');

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
define('AUTH_KEY',         'vpbpr5?)HAe3f*X72,`7e):sKVQ|-l`p*.7`:@jJr o-D)GC QA<zbJY_$S$^Kq8');
define('SECURE_AUTH_KEY',  'h*b=wvC`!Md*K9Qc0P!$`YqPOSy1nR!graNL[x{/Pds8i(<*ef^ntM2NtKI>D$:|');
define('LOGGED_IN_KEY',    '&:Oz5qO1+,JD+V~qw5_`nrq)aK)ibywW<J@`;=,r!]9vNo`JNrOgB&@/en(QQ{Wn');
define('NONCE_KEY',        'LXYN</G$OLB_3z#{Tb(JTC8.A)uN<%V;{whI>]r_zN]^cm_8+XL,nqH12E3A}-og');
define('AUTH_SALT',        '{&*u?%KTd;!6Iqq%FdOr  Z z?Z,>u3,TRY?at>hwF76>T}S:Il3WybU$lZ9GS?L');
define('SECURE_AUTH_SALT', '.6>cwK2,>(zIINUP28$TR)w3(Aq@)H!Ce$5qh3,laS(8QLy_ZH)X,0{t{A:b5c+~');
define('LOGGED_IN_SALT',   'L}3:;LJ]Mu! O)%s{R7#DdMGvPCe$y$V!=0,Y{g,DH#9;9>ZSWs;.lj<@[%2m0X/');
define('NONCE_SALT',       '!`DiA#nXT0*5cOX=(2]lZGgmeOoLpO&]?C6RasIo|tp@E1f<.*3C!CCKDo8y7)D{');

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
/* Wp-config   */