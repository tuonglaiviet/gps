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
if (file_exists(dirname(__FILE__) . '/atlanta.php')) {
	// ATL Dev
	define('DB_NAME', 'dev_gen_career');
	define('DB_USER', 'firestak');
	define('DB_PASSWORD', '!vn!fire$t@k');
	define('DB_HOST', 'sqlnyc.fslabs.app:3306');
  } else {
	// VN Dev
	define('DB_NAME', 'pcornert_gwinnett-ps');
	define('DB_USER', 'pcornert_passioncorner');
	define('DB_PASSWORD', 'Wm._CaWa82R8');
	define('DB_HOST', '45.252.248.11');
  //  define('DB_HOST', 'localhost');
  }
  
  //define('DB_HOST', 'localhost');
  define('DB_CHARSET', '');
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
define( 'AUTH_KEY',         '6d5393fd002e1ae54d5cb0189d96a4e9fe7708ce');
define( 'SECURE_AUTH_KEY',  'd6f657f8631488e5a73f40cf948ec5e634b08794');
define( 'LOGGED_IN_KEY',    'd7148327625b30882ea1a574aab4ee15a9229016');
define( 'NONCE_KEY',        '121b5773b6f4488b2426df3632df6a15219d5daa');
define( 'AUTH_SALT',        'a2c571f3b13e9febc69a8c23089bb6d3bb0c96c8');
define( 'SECURE_AUTH_SALT', 'b445f10b4afe3421632c7673a769e91eda91fde1');
define( 'LOGGED_IN_SALT',   '2f4bc009e7cbaacd78ec944e85686474413adc18');
define( 'NONCE_SALT',       '3565656c82239ae2e23d99a24998144ea470e4ba');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
