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
define('DB_NAME', $_SERVER["DB1_NAME"]);

/** MySQL database username */
define('DB_USER', $_SERVER["DB1_USER"]);

/** MySQL database password */
define('DB_PASSWORD', $_SERVER["DB1_PASS"]);

/** MySQL hostname */
define('DB_HOST', $_SERVER["DB1_HOST"]);

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
define('AUTH_KEY',         'y810-_xT_b7-,a9]}Yk/>]POW{f5?0L@8\i1_57~1;%9.£Yo6m');
define('SECURE_AUTH_KEY',  '0-75=-_b]j!5-^,w__X_Y9B-H__n_l88---=N8_c\7_t#Kw-?');
define('LOGGED_IN_KEY',    '1"-8,3%¤z3}2:_H\T--_8g_£x£_6--uj£6-;_i74_]_+#-8/b#');
define('NONCE_KEY',        '@_oQ_a8|o{V02_?/XY@0\G~10q9jB}9M[_M=_0-f_5_G~_77~:');
define('AUTH_SALT',        '_t8§-xNG6_1@40FD6LoS2y8@%Gx%_D)kbec-c9-[VV56¤:5>19');
define('SECURE_AUTH_SALT', 'M=82-V3630N_0*)3V5D-o%nf-v__-R5S4,TIA[8F(752y97\"6');
define('LOGGED_IN_SALT',   'Wn>,_Kk&__g*~-}K,__ofX__X--_BjK%49G_D5HT6U--w68-|?');
define('NONCE_SALT',       '-|1^5Hk7-PSc,UM@/H4Y05jG_h2k$KJ-u-s_2Fb-`u3_&376.X');

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
?>