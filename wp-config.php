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
define('DB_NAME', 'jasonshu_jasondb');

/** MySQL database username */
define('DB_USER', 'jasonshu_jasonu');

/** MySQL database password */
define('DB_PASSWORD', 'yH1+$tD*JWs6');

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
define('AUTH_KEY',         'ff7S?:yUe$hhw5{A8Rn[MGeQ%<4c$xBKz)/N=oNm7N w-731OacIbyVB1g&x?Ny6');
define('SECURE_AUTH_KEY',  'eIm}u7g> |5YTvHB)r~-m!v|pGb#kvLgcV9`<):|/5!Ra|.s5p|zdtQ{dU(lV6Rl');
define('LOGGED_IN_KEY',    '{ 4B;LSXi(Ls^ZL$*VTa=t-B4XB[MF2Ei#5r*A;|qHo.79|3Y5zg.o/I|J6(ja@.');
define('NONCE_KEY',        'b#$X-jJ^ek+~U=*80`Zxf-&hpq5^%|%]rX|-{eC4q=a|u+u@tRBbG(Psg2 hEda;');
define('AUTH_SALT',        'G=+9]/%kI7=4?`gGq97K0ZE8R+LN8!9VmJtD>>;BokyKCJ2m0]z@.Y,@bg9d#zfi');
define('SECURE_AUTH_SALT', '}@ie7{rKiybBt}]Aa}Hc:C:I8:P{oZ6P*.#dziR/|S&Lk&-y])Wd,%rcn<{YDaB`');
define('LOGGED_IN_SALT',   'QxB~-.u|f21:6X~{mV&E,@6cKt6-]&P9iAP`-+G0EO+bTvB9|,|NhEeEf; c8VAY');
define('NONCE_SALT',       'Y8u+llh?~&xBlcBuSOU/`)y.g8WDcP:&B(AHm9%GCgT{iCM<~0p-af1%t- 3;.-N');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
