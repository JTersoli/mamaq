<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mamaq' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '8gH5QfCckwmDbwJwe47WKHhvicxzID9N4dpmw3G5CncSg25TnLHShnqt3nh2bpQx' );
define( 'SECURE_AUTH_KEY',  'gm3Z5WUzVTX543d08bAu8ImE6tJMgjg9XlGaI3qJ8lWlsyxZkTiFsztBJ9b3UpyN' );
define( 'LOGGED_IN_KEY',    'SlzHwDSmB7SmPPJakoFKZTrg3rE97x30Qdtcc5SlzdO7z774kASn9AOIgxzCY8Gm' );
define( 'NONCE_KEY',        'T9xk0JNTZQUoDsgjpSWPLqaZaaI2PovA7pVWOjRw4Ksh7A5FwkSgFk7qYz1tWeQ7' );
define( 'AUTH_SALT',        'pbY5accNe6dYKByqHT5OSVjpX6gbOuDDXmCVLzUDzZrBij4cJEfKNSpOCvmYUUcT' );
define( 'SECURE_AUTH_SALT', 'wsXUZeEXLNpNQTNr8B1Z76NHAeFNUX6fs1GdzDsa5AEv57EbJWc44HLA5PEdWbww' );
define( 'LOGGED_IN_SALT',   'cc2gKDgDYkgpt9IE6EBEDVJNyc7nFzV8BVVj9FFKG4TXG840CGA8UEy6NMUWiC0y' );
define( 'NONCE_SALT',       'pvYzxkd0o1d6w60uhBULZFP428PgC8J8xy8EMBYwg0kQ4FjjsHe46a1gQeTPmc1b' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
