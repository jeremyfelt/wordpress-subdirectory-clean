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

define( 'WP_MEMORY_LIMIT', '128M' );

if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	include( dirname( __FILE__ ) . '/local-config.php' );
	define( 'WP_LOCAL_DEV', true );
} else {
	define( 'DB_NAME',     'DB_NAME'       );
	define( 'DB_USER',     'DB_USER'       );
	define( 'DB_PASSWORD', 'DB_PASS'           );
	define( 'DB_HOST',     'localhost'           );
	define( 'WP_CACHE', true );

	// For multiple sites on same cache setup
	define( 'WP_CACHE_KEY_SALT', '' );

	// PROD Home URL (http://mydomain.com)
	define( 'WP_HOME', '');
	
	// PROD WordPress URL (http://mydomain.com/wordpress);
	define( 'WP_SITEURL', '');

	// PROD Content URL (http://content.mydomain.com);
	define('WP_CONTENT_DIR', dirname( __FILE__ ) . '/content');
	define('WP_CONTENT_URL', '');
}

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
define('AUTH_KEY',         't(;_#gm0;-C{$a`I$K)>v*%Pz-80U-ZN0?dfuNc)W0>4KvJ&.1((~ku-6.XUXj0_');
define('SECURE_AUTH_KEY',  'd=e_HInEOsloj+JMz*OkNAP~JTX4(v&=tk;Q /2Ol+s#+C,L#mLz7gyR0$I:bE@d');
define('LOGGED_IN_KEY',    '9J{!b!reZx+L2SWjKR7. X3JK66jG{-nf^|AA$xp~DD69K<B/)t;]Ng=37P5s-GC');
define('NONCE_KEY',        '0O8[1z]/[G5PIQ6S/F!8F@j)al9[y%F}v_m~[/6X(pH4g7%cmTcH)qJVA~|.zOrK');
define('AUTH_SALT',        'm~|^<ab)VdD9IMCZa0Z? ]pnQjn]k6[HUR!FmE8d8RGuDRb(KQCY<<cLQWDUYp<&');
define('SECURE_AUTH_SALT', 'fKu~[oqY[20xAR|;S^*1x*?Y0>h~;`CNenxd7^E!@<jnnpRf%zD%-l(8EVvcrGs{');
define('LOGGED_IN_SALT',   'i]O`J02T|B<?|;p1yecUZWD2sdGYur6f=&&MI8IYLHBQs~MUTpP-,+9jMp5ZJ!kx');
define('NONCE_SALT',       '3S{O_/tYOPGB^s-},?$I<{5[A:%N75f!-h*lx.emj|B$U8h3)baV8i/0fX<oc=|d');

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
if ( !defined( 'WP_DEBUG' ) )
	define('WP_DEBUG', false);

if ( !defined( 'SAVEQUERIES' ) )
	define('SAVEQUERIES', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wordpress/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
