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
define('DB_NAME', 'sacredk1_wor1');

/** MySQL database username */
define('DB_USER', 'sacredk1_wor1');

/** MySQL database password */
define('DB_PASSWORD', 'KB20ulqk');

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
define('AUTH_KEY',         'GKjN1 |QSU^yB?*9JC3t~P/X-rExg?e-j-q#x&/#dLsXk%{HXk]Is 8+b%VN_:HP');
define('SECURE_AUTH_KEY',  '`j#+yTsi[H:z%uJLt/LF`{8Dz@oov.5ex3y~12<An-^%@AnK%,!HY|J],2kwBB+t');
define('LOGGED_IN_KEY',    'G^x<sy]_L/f{&o&PJnR6dW~gV)&il2lJOrJy,YD1b%HCS;-.JvE_Wbt<csq=uZqC');
define('NONCE_KEY',        'Ens+fQa[!k8`V>QA3hLk+B2_b#q30L&2QXaH=-q_KvkcREt*rr,o+pmv+R,TWing');
define('AUTH_SALT',        '|&u4thVc3)B:P1f;V)>8&5^{ t|xIX[lw|gr(2|SR@ep8x_^.aL0)G/rY$}Xo|0q');
define('SECURE_AUTH_SALT', ']+-+dLRPG6!:B%X(cr+ c_yIx37Fig9VpB[ 6Ht|g-!!+=/1>?e,yj}wxqW@*@`S');
define('LOGGED_IN_SALT',   'n&AX;rNl)SJr`?%umSIF5N48<#7B5W_)zihULKt~V-3Iy5^}aaeY-=Ml#Hy|]P(h');
define('NONCE_SALT',       'b2w/vH}&M~G +b/Jr-l -)DXD=mwGu3H4YgSF|&MCMe6^x;XYL#%!vyLQ}Ud0?q!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ski_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');
// define('WP_SITEURL', 'http://192.168.1.4:8888');
// define('WP_HOME', 'http://192.168.1.4:8888');

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
