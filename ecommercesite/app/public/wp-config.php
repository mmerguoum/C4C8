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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'tFzatK6dyVfq56q2c4PcLcAUkzftYEJeX8O8QZ6kxzF2yEwBW/JogbxpoUWtXHyLhhzvxwHZ8Pknvv+agRFI2Q==');
define('SECURE_AUTH_KEY',  'it9Cel2qToSt+gRvZo9/HZctBat+vGfxvE2SXNu86KWJ4X31zN+6JR1kZBmk/voLttgsE0tdtZQTAxHNFWQUFQ==');
define('LOGGED_IN_KEY',    'ZBgHDAFfPErmOZi3uZg3azYQKKnJ5jNnGHVuyH0821XQvrNtW7AS/Q8ZgIoSXuLwTQlNHyiZdTaYHNjYj2U7WQ==');
define('NONCE_KEY',        'x4VrzV5qYv4GdZA1QSXmssCntblL4JHdAjKmDjF7/qTK7vzkk80HMEBwiiqOrniaj2FRAeinv53ZVVJi3/1n6g==');
define('AUTH_SALT',        'XMYKQXWd+R7mKVLdthSzolW1bD90RsHajrZ17CrFzZ6/8F6SYgzTER26uwTLZfyB3msjjq5aGRy2uuOvhLGJwg==');
define('SECURE_AUTH_SALT', 'mCMlLkyQbT7FGL5AstW9IAF2sA3Dw+8/rooOgUxrq0KWyQkZ2Y4z8ddVqyvl53wVUYDdsLLaH8rd4bLkYS0QIg==');
define('LOGGED_IN_SALT',   'c1Z2QZX0rkl7Ar4+OX85ywSWL7jjhrOu0vrF87BnEjwDIy5qjjKEuJzltTENSZ333RidO7/LeFfZVf/bg2795w==');
define('NONCE_SALT',       '5+RfuH3C2V1abVO+MYI4ONeIOtFrpZqDs4SxC8vxg00GZQ90KjOdDnzTF4T2otPCqPUERDoGcoutLTLA1paVtw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
