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
define('DB_NAME', 'wordpress');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'm!39q@3h48F3tF`~W-HN&-ezK&yf$RCwREAry Z(:S0kD:B={$Z(&UQZsYY?ld p');
define('SECURE_AUTH_KEY',  '|.H`o|(vSt=)|T]#)e#%<w~$K+ v~QI/ex(`7s&/ZWbY$3Lz^r#n-3sSqG-^:Y4I');
define('LOGGED_IN_KEY',    '^-{cF`G8P/df$Gd@bYPP}ie,D6XY<.c2SA.-Fm-&^w$Hp:`<K^Q>}y6!]SVX/8Su');
define('NONCE_KEY',        ')3xfg,yc&uy^{<%PfB#uMbG9=x(//`(2h`G6hxohm#KT-QbJd_+CTasP$YDK /Lm');
define('AUTH_SALT',        'Clv*^`C]2uo[ek1;|XcuEZdHPq2serxb`dG/s$*g-Nc.I+k,BV-:iQ?q.t)(3j>{');
define('SECURE_AUTH_SALT', 'L,sy:`:N;<|DoPc&|bTLAxsn=Uv{d>;$B-JJ>}2I+<,hDt%Ao+f05StiAvE79Y_1');
define('LOGGED_IN_SALT',   '%jnar-DGsnk@aWsm)-;Qm])/NvTrURL<2].y.||)na#3!cHS@&]by[p4O(45.jo|');
define('NONCE_SALT',       'i&9U}[K^WGF_?WL+F)X2b*l|V=_t]Co3^-tK`EiD)I3tY$eqv3Y.#6 B%CDu;Ouh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_vmp';

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
