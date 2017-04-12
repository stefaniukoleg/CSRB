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
define('DB_NAME', 'csrb');

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
define('AUTH_KEY',         'M*d}#m&jJV]ubIqb4Yf/,_l>Rs|nuZ`;85E0zn>EC*6A c5SLfH.v,u4+WNmeB-Z');
define('SECURE_AUTH_KEY',  's]I{1qwv33?C1(M.OY},B~qG)2rFyXC6j8FU)||;;$%04HH <I1Ve/wu.V7H]V18');
define('LOGGED_IN_KEY',    '#5<u|.DaZeqA{cj?JQ>VcNMmZq0d2gE`x1Se5Mqjj0W; ]53W*6ZEMwk@T#v/::A');
define('NONCE_KEY',        '%%k)ReTyfUK)CsG!|q)aP2Iv1WUmO*5^#(9ESumxjAVp{G]N- Q!x^VYW]Q1O]oo');
define('AUTH_SALT',        '>``~*u$0H[7U7KtgjW`/:;<`oCZ/v(lk#Z?&|sNShOByCS>,L7.h/_.Qv4ebm^ u');
define('SECURE_AUTH_SALT', 'Hrv!#:hfo2ibITPE`b:u9y*}`!m9d@P`p{@S=.;9nk/u84H)PNEe[yuZm=X3Pq4-');
define('LOGGED_IN_SALT',   'O34/{J1lZuMpE2k*Zq|hU:sl@zjXB6>i0vASA#/mWHd2~}4qVp(7wmpY%[xdh^sy');
define('NONCE_SALT',       'EgA2}`N_%>FOio `hL(UR($:VkUWj2}bV1BrUX#Ni>I+W/Sn+C:E>Yvu6s^}8ce0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cs_';

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
