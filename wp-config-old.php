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
define('DB_NAME', 'neighbor_nw_wp');

/** MySQL database username */
define('DB_USER', 'neighbor_nwwp');

/** MySQL database password */
define('DB_PASSWORD', '$1BI{/ig6a+}5=R');

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
define('AUTH_KEY',         '57RY0N**RZz,:K03bIHTigY6 Fben]|o~+r6-]&A=Kl=O[r*<,9W+./8Fs@jz)6 ');
define('SECURE_AUTH_KEY',  'H@]`&.ibA+x/JHyNoO XkzoM!qq#9V^`fI@#+64`H}W-CYahQkFrg+dJgP-(MD44');
define('LOGGED_IN_KEY',    'Egu|5S;@oyO+]c/vAt)EX3TT4vxq%T?b*Cs Upt+Qu=ask)P%IUs|illV3/|MKjT');
define('NONCE_KEY',        'H=2piqVE=Pkl21FdD8B`:<j-Z H-AD_}+DReYG(1n~jo+V:$pe+oXMzvqk]ev:{3');
define('AUTH_SALT',        'J/,z`JO=lF5Rs2ne_S<Q*34?-?#!q Mf>g0o3(YRABRFkW.VxTv5a-C~j6z AJvu');
define('SECURE_AUTH_SALT', '*_^2})C<- bM{u^R @(l&p9LlLwGHo0CTUwsl[FB~`O+d=f%+Ma#,DF?{0eZ&s:(');
define('LOGGED_IN_SALT',   '|9t-qF%5Pj2=kvT2(wx}tevNnJ+]?z|0Y~f`^_+Q<q*0bi5/u /!3P)bO-z{I,@3');
define('NONCE_SALT',       '?izYbfw-GLULr(mCFtLgI/>#:zTgN~fG[50=-1gz*cQ4ex3#THry)C%v1d,^t^AM');

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

define('FTP_HOST', 'localhost');
define('FTP_USER', 'neighbor');
define('FTP_PASS', 'Legacy^Project');
define('FTP_BASE','wp/');
define('FS_METHOD', 'direct');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
