<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'valueloc_WPFAT');

/** Database username */
define('DB_USER', 'valueloc_WPFAT');

/** Database password */
define('DB_PASSWORD', 'lSnm%@)S*TOEH?m/:');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '1ad74fbe2bb6a1793f240d8cfe4f71e00803cd89a61c36f0016be62d3706691f');
define('SECURE_AUTH_KEY', 'a627748a4ed81767cfa130be7976eda151e4686b6fe9c20d85c57645bf5dc8b4');
define('LOGGED_IN_KEY', '3b585edd417865deb4a83bcca041d4fb41d0b61d215ca3a106cd49cec9621888');
define('NONCE_KEY', '3cbbcb748ce98e8b86eb068fb4aa58d77c2ed77c0be01661c4cb2551307f118a');
define('AUTH_SALT', '07fcd08458aec607c17ed1e592ca50bb3c971a9c12a4ea509fcbfba115bf106f');
define('SECURE_AUTH_SALT', '5bcabcbf4ffdd6ea47b3e0138ee283c62ed9ab6874afd3e1e0e4d3935fdb92c8');
define('LOGGED_IN_SALT', '28fb464b4bb0322bd5e078f694c28be13edb57809ab82eb20fc06326246928ec');
define('NONCE_SALT', '8504f46e8a8c99a253757c5bf03ba8b899240429f287cc4aed734a5538689124');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xyr_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
