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
define('DB_NAME', 'mbaya_MATTBAYA');

/** MySQL database username */
define('DB_USER', 'mbaya_mattbaya');

/** MySQL database password */
define('DB_PASSWORD', 'groteke');

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
define('AUTH_KEY',         'Nn=99BDp6_cZR<oj1}OHLy[--l{.{..BVw#j1kX2U5@pQ+-<+O?fO|iwqo2p^z9V');
define('SECURE_AUTH_KEY',  'BG=n$0:Rvxi!4kK% _+/O9 j6y%|iPrZtIa-ALBzHEACyP+Z]ICc-=K8?-#IF6w|');
define('LOGGED_IN_KEY',    '5^T 4fYtp}L8^-u-KVq-+NL$S}]jBHn^vd8|KephV}#49(@}3Jz-fTsQCyo,+.+q');
define('NONCE_KEY',        '`jxgkv`+vg>,=oDKb+NNG?5IQ/gpu@<T/N|Uo|=M%$IDW+e[I]yZPGQi|O9[_$^i');
define('AUTH_SALT',        'c&v1>I-}T -Qv-:Y?%d6/<%<B!XCH7i1-)|nKy~myVqr$);i`+4Fi^viYM*l|t?+');
define('SECURE_AUTH_SALT', 'Ec3b#%zv*Ml%|$Vg{Pi]E|33G{]!s`G [q,0>t~Ow|c.|bsV[!PCKqg)~$_GR*c~');
define('LOGGED_IN_SALT',   '/1Porz!A94^b_+ztl<<OUQyEWwCD8qjBiiW9+>j)q{hfZ{pD Et1wO+s&,+(y6uu');
define('NONCE_SALT',       'oi]H{QEFa_i%-]4(K+s:%OPIX5kun`CH:Pa7LB-fs@ o|LVnB:mR|j=2Z@sS|D?7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'oe4lttd_';

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

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
