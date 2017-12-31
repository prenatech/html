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
define('DB_NAME', 'personal');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'f0bb766c1f2b111c06e295b5bcea5159af4a44f7772518f9');

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
define('AUTH_KEY',         ';:A%mNVSN8P%@%C~B=wP$(XwdZjbARD0h9{/];HO;!5WRe@d&b+@SO00*zSPE?pw');
define('SECURE_AUTH_KEY',  'Zc-}aHq]u^C*#PNxp?w+ak$E`I?gfpj$0{z*9G3s6sfkmLE<!C:2s-s4W?RjA/:%');
define('LOGGED_IN_KEY',    'G!UxJh<-P{}t;M<]l|,.H dK7?/MC<oWDq]kr[==tb<zO@+LTLSoVsfbd,OQDZ?S');
define('NONCE_KEY',        'K8Q$z7A$%MrtL<O/2Xo$Ah>5ot|u &wpB3|ZsD5j,(oEF^e9{uCHsiBHiO`V[>{(');
define('AUTH_SALT',        'n%i%MDYMc M$r,;,W~;^ih$Ix7R*d$:_^Nn:b4XYKw8G9h6#.? m6noS$G5B1R[#');
define('SECURE_AUTH_SALT', '++=lGpb|fbs:nG~/#6}n/rVWi]3e8RzAS$4K@xwMCZp;.K{@pt:N>c;5XC)/Zwm<');
define('LOGGED_IN_SALT',   '7T$zIwHaD(FMST1Wo<JmXB@PA$J*LQ>JT8bH!7Z7y&~ ZmVN[VGVWoHHw:<<Fe$Q');
define('NONCE_SALT',       'Tc{ch#a,RA?;|LRZZ `GBcE3T-$`iW,xA%Lqm<{;0191S{3DIC}DdjV#,$ve/$C;');

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
