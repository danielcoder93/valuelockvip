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
define( 'DB_NAME', 'valueloc_WPFAT' );

/** MySQL database username */
define( 'DB_USER', 'valueloc_WPFAT' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lSnm%@)S*TOEH?m/:' );

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
define( 'AUTH_KEY',          'I3&R5]l+?BfksKCMhH)xU%gOE9ph{k43 QYl[{A9jI$DEF0vV~3@=)#wJzWwoOE!' );
define( 'SECURE_AUTH_KEY',   '@smrgjN]_&)`4q}g$dzk1z4HD,W5S!_Y+?SZzUg3q),cqs#t5#q]P^hAUd#vVLAy' );
define( 'LOGGED_IN_KEY',     'd8Z|oC7B=4*vM$z!X.COcuz#+&0qD_vrS$HQ;LM A20heT!E}cNVqqAf>k@!AiPW' );
define( 'NONCE_KEY',         '`z,{/dzb6eH%eWr]@6KM_EEa!YGL3D!$nBB>M!d/e#]ra/!JQt|N0JRe0dbiIikc' );
define( 'AUTH_SALT',         '+h(CC_~KL.~7C_4/;*Y{x!tk@wmI&8Js!Y.XmkLWhzghGQmUp+y_J=M$?|2trbON' );
define( 'SECURE_AUTH_SALT',  '+mFO*bUxff0^u9K|89YXfd8(/s!5qZA`DS1cV?ubAn;=;l5N7#)b0@xF`BA]|>9=' );
define( 'LOGGED_IN_SALT',    '&MK32x|30(l_#B!2P]]Bu856q.Mh+KaJLPE~>p,Qk^V]~M;07)OF}.`sj4RNuHa?' );
define( 'NONCE_SALT',        'Pj<@lR#9j@NcUk;yhtlR%0i|h%6l}ZVA9KTbkJQ{ii1gtW087#.G$X%AZe-uv[-4' );
define( 'WP_CACHE_KEY_SALT', '_9(#K$h}S3_Txrd;.$U@lxo+h;&!ZW^H4NX(7gau*K{&eG(bEG9ADF(0uo2&w}0!' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'staging_xyr_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
