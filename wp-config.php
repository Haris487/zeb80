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
define('DB_NAME', 'taxiwinchester_test1');

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
define('AUTH_KEY',         'HdcfWPX`dPZ%PT%[N(OXKmuyN}.aV<S2of[V?r9Z4g Ac:c~z?lmLx.]G1B bw{^');
define('SECURE_AUTH_KEY',  'IQ5Mz`>G5~G2rP<2}J{/&EH$,qZV`#oh@^FR4?ub?GYZG%yF{-U+KFp}<Bwd{g}v');
define('LOGGED_IN_KEY',    'jse73V(kEg3eBpUDT?v-Tz2RaGwbQH5^FFjz~Peq[|!S@nld5aMIW PG!xYZ9,$y');
define('NONCE_KEY',        'M*RBX{|:(`LTXt/xh=v.=Ei;(Sn#+r39oT~4.f6NAZ&2_&6||o^UP60<./3D6p:R');
define('AUTH_SALT',        's0~Rh~T3WL{4U~WFGQ*ScNpTR.oXmX-kg:^c;S0aW%hEi;O7-6a!WaO7p=IidU9Q');
define('SECURE_AUTH_SALT', 'P6qli&;}.S,qiZZWd<8)u2R{$AJ%Y{aQCFI-K$$F!!t~QTie_lv3`f&CFxT@>J9H');
define('LOGGED_IN_SALT',   'LEQ(>vr3@.d#:=RZ:9rsJ2+&S[Z]IGBC7PA2ctL8nQcWAMxpw3CUoSgH1Un=Us.&');
define('NONCE_SALT',       'G*wL{K_Ta6j73;eH;#1>0tN?i}HAasmquEbzMs3*}OK]96{Y:u@YcR^>VPk`0!CZ');

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
