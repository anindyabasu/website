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
define('AUTH_KEY',         'GPXJ8vm/@3[n4rdxB7mMlv+t])~U+ +[k8`8XN%cydrdCD>e36fLQJL|n4WwX9iv');
define('SECURE_AUTH_KEY',  '@4r})@ne[,E*Ojg/gGXZFt,)a.%QSo;JWM/?i=fhHR#p:D*=w@0%?(4vuN}{+V.B');
define('LOGGED_IN_KEY',    '*7-&baVlE:gqUiuVw=BWhJghMrdiu 7gP+PfS.k~a9!?E~iR<j4P;PoPv|</fef>');
define('NONCE_KEY',        '|Yr^nt49T8;];(JWqWjy!IksIe%6peQg]V{5U>LJ*;g-HP+k/j!|*Ak6el[Q}1rY');
define('AUTH_SALT',        'fQA<cl,0|1+eZP_v?_Cq9yP=#Lg|BwK]4-zhv?zx+&~V.Q-f/>,d!_q|NxR1kU=q');
define('SECURE_AUTH_SALT', 'xv?ivT?!t3 Zbi4A+VW:n];YJ>vTpwGa#Tb|3L,Eb(]@B.p((gUo{*rAWV#}e-$-');
define('LOGGED_IN_SALT',   'pp9skA,%/vy-+JvriLaU+i=|})&6]Q}tw/Vhnh(BO6j`qpNpu&!+?tLOsqUocR@u');
define('NONCE_SALT',       '/--L7|Gl4<y6DNJEwV1NmII4#ngK33cba8lGR9|qzN6;?%n |l*~X[:yT=#5Cc4f');

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
