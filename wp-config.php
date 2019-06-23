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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Vpa8yMsU' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'AM;F{iN|dP)QyxgQA(O&hi6Oz|s[31ev!Pbet2UJPuAY*#Oa~tRN [E8<n_l(}=q' );
define( 'SECURE_AUTH_KEY',   '#x&6j<C(+Kx0]G/F3w13;7Mzg$S|te#.Zy1=[vc_ArGQq09[%:>ExX7G6)I&&u}1' );
define( 'LOGGED_IN_KEY',     '~t:sy;[(~bCa-XkV!2Qe`@8A:fe>qf-(&2]tBSs-Kc<>3D^rg1<d&-&sm>Pw/jyb' );
define( 'NONCE_KEY',         'i%Fm+4Sq-iQb,mr$mpU99b7.,iyw$N1ML;7{OuGPTf|S#0*?TEu+98AWkH-XU)d^' );
define( 'AUTH_SALT',         'wS/sp[;!+o0f._H>9l2lrp8mB*]<l9Ba^hpNyUIomP}fv~/96U;1zWZs@1%;Syx:' );
define( 'SECURE_AUTH_SALT',  'xwNdK(Vj0r-+HzrJ`B!;)|pT&0lq!l{(x^=M`=yl4<Nptec{;w!-56gJqE/1CQOl' );
define( 'LOGGED_IN_SALT',    ',YE-V&{Yj%y5zRg^y=<n)Kq-^g[G#2~xb#PlDRwlc8Kd :UK|_eV:7hza);~2T$g' );
define( 'NONCE_SALT',        'YNIL[ja+PdfLN_$ceY1YZ1USBI-%<;wkDv_x)`6wwf&Vt8Ag#_y1d2@StFbc/X9?' );
define( 'WP_CACHE_KEY_SALT', 'r2Qz^R^r-5u%iX52u@vfeF42N9(9CB$d6v%>?d5I:y2zK*#0J?9,0qdJ!YPBhEa*' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
