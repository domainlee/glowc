<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'aiarch');
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

define('WP_MEMORY_LIMIT', '556M');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
//define('AUTH_KEY',         '3h&y4Cr>`g3I6y^xw0S;W_68OM,3hkd`vQ(.pN=j#s.W}i9f~:A0& oL&m(ls#0N');
//define('SECURE_AUTH_KEY',  'x><Ek_G*@Cl^g2Ry@~^WpA>;;nYM(Qo]^]5&95AZGEls4eR5_]U7~18x.?SC_3JN');
//define('LOGGED_IN_KEY',    'Uqz|Ne#r(|bLS _V[T]T52RT9Qrv9&Z^d#o>CZIf2;$1G[@}iM8}>9k<vf2A4-J}');
//define('NONCE_KEY',        '~K!!ti 6S|Dr1_co*?AtCjJ5x3HKnTN*1(q*%@u>M]:!W<h7v<|be]}zMirx#xw&');
//define('AUTH_SALT',        '28,5sg}~Ld`IEv(1ZIa#x`8a#9wHRHWxT+,b5.%i[7ZmC,d[LTN8wY<-ctYX%rX(');
//define('SECURE_AUTH_SALT', '#J{Fy%JtJ|`J(jt]o]$Z{FJ=Tx$NgG~Hn7jmfQU5Mk*4~X#?tqn$gt<;2tfzSR?T');
//define('LOGGED_IN_SALT',   '[BUuK*^=mC}~xsDLUV3`.2.~#@d?R4Fkf2YPpXVV03RuaA|JO=*u@O7OIn8dBIB]');
//define('NONCE_SALT',       '8ST)9PsJR;7N17Se6e6!ZAs1{od4r&8t@e}6@BY|KY+*Ka`3xIaD*d[iZ>o_<Y+i');

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
