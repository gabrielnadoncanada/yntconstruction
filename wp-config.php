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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'yvan');

/** MySQL database password */
define('DB_PASSWORD', 'lingab11');

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
define('AUTH_KEY',         '{KfzYry%MI^[xkm~X@,w<a-.S|?^ezwq]=8-+^{AA8pis}o9-~!(|PddY<vTdz?}');
define('SECURE_AUTH_KEY',  'Sb<qh~NG>l~?{?1lYk6.*0T-#fj2WVUl-5b%PHQGCp+0F[)[{=@/&ukEi@&-/49|');
define('LOGGED_IN_KEY',    'tzp6g(Nk^+&~64Dz-<dYs1&0$7mjeDM#Nwi+dq,5rpy{SE<2#J]w+ >]:G=)~W.3');
define('NONCE_KEY',        '!VDb*RvO,ZTr3ahjN;yJrzyONp :MbBB*yW*Q1.lx$`IA_(U/!sUS6=:s%SQlI|=');
define('AUTH_SALT',        ')&GxFEJL6R@4wBHT:+$n$^tqRv}&<=iFir}3I:cUkHe5[uAFcR0f-&>Q6s+,3~Eg');
define('SECURE_AUTH_SALT', '{_q+W_%EA>Jd)V/XtQ0d+Na&HDo88GOcbssAt<apo#WlW7tf.tyx0@UP3wr7TwXQ');
define('LOGGED_IN_SALT',   'n^l^W0kRrbRB)iz+]m-Y-I/h>lj(_M/r3M+B|@=D;oy4bf1:cK[#?+?jbdN:6PuV');
define('NONCE_SALT',       'W(2gjF|8a:?+!@ybuB/rC786p_#y?x&~oNI2zFg}.|r$5.!m?l(XsM+Wez%QD7Zb');
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
define('FS_METHOD', 'direct');
