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
define('DB_NAME', 'b32_19676375_taxiwin');

/** MySQL database username */
define('DB_USER', 'b32_19676375');

/** MySQL database password */
define('DB_PASSWORD', 'myzc1kw3');

/** MySQL hostname */
define('DB_HOST', 'sql313.byethost32.com');

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
define('AUTH_KEY',         '7N%3S!=:Wukn+zY%Zf{tq.h`E? u}}4Wdq0LZe0bN, (b>RXW]myO~AgKd`C.s]Z');
define('SECURE_AUTH_KEY',  '_WkV?O;VRwvB6&u2f<A%-Ov#CQ|(>YsODjCj{g,`6&fel072i6[!%ES<^?r*}$]P');
define('LOGGED_IN_KEY',    '5TEQ_:69-@*@@|dUkR167@+1+8y3 0eBg2+N*KAikXaa%>IvH})``/.hV-~YG~3@');
define('NONCE_KEY',        '(za:@2aLeNi /FQJg:w0=i:!+~9RlYk}F9CwX>-/`[SP?UQ[|9N$Fp$rZmR{C7|j');
define('AUTH_SALT',        'Dn>S5S @iVOp) V5ioWXwXuSzIf:J[VN-.),1nXU)&Wr*G-&g:7EkI@SEabN*5D4');
define('SECURE_AUTH_SALT', ']M4;kcuBSDJr}|P{NZXTEa,{8Tih3(!~p>r/C0){<,lSlZ0Ju)E<OQw*#1<nS~5o');
define('LOGGED_IN_SALT',   '3*{qC,3j|wZ3D-F>S9Ko[v;];6[g>:>3^5ipLOs;DKYSRwUu suMXj|N/mMSj9X9');
define('NONCE_SALT',       ',rkg_q{2NN$g}hCjxd6szxRAxQc<kk4o[79^Ed=Lok+{;88W`hx,*|YoG6oOO?>G');

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
