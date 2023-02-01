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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'revamp_times' );

/** MySQL database username */
define( 'DB_USER', 'admintimes' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Timesadmin123#' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ZCNI#6jksK1E,<-/xGMb{=Z&0<.J1B7iCFt[$Jp9&%h?1RVG(T|fdG;#q)e3}bx ' );
define( 'SECURE_AUTH_KEY',  'IZIx82H0Wp:xOwR:b-;$h^?Mo=MSqd@f{^[?39NX@Kv]AA-vjWv#Nf{j(8}W| Z4' );
define( 'LOGGED_IN_KEY',    'WJEH m71^tBUk0T>9O{)H9RV+YDrIlnlF<r&m?Re<V1D;)/9wvw4Z66S1k]L_-|4' );
define( 'NONCE_KEY',        'u.dSH$JdQaHgj#;3r]I-eE1Fyrm#tU#W;-(z>^` =L=.[]{MfVK?rt}x9TYU/kft' );
define( 'AUTH_SALT',        'B}{Z~innS^1*%}X+`NumU2Xo@)HN,t}7gjxM!6TMFGzl)0:[69T@yy1+F]@kA_7B' );
define( 'SECURE_AUTH_SALT', '+{}+FRT~%xd;stvK oT0n5Z^Q? J-U7PX ~~>,}oOM.MInc.:hPp@fE1+EMEO>we' );
define( 'LOGGED_IN_SALT',   'c+L!r07m!VRyP#{V.i.V3oe:Y4$dtthG>[TP4aKkF]uyl6$I~NPg[M9u_355]vZk' );
define( 'NONCE_SALT',       '!w~4@gH)0EI3-G$HRJ?1 y6iarNJzT<y/PD:G81sD^|:f@KFg:3VZuliPIs#tdtd' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'memory_limit', '512M' );
set_time_limit(300);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
