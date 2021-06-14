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
define('AUTH_KEY',         '+rZLsmsn8VCX2h7PH39FC5G733BguJe32HUvC0gs96tEgaXtMsrOn5ynh9cJAiQOgcjgyEHlmE6H9EialvJ42w==');
define('SECURE_AUTH_KEY',  'aKdzHRtKei2Vqokkao+cRiAbcpLGcAFIP/7uENlUNzDHF690rpvxHc6kxtMWFB782LvmiZYcwPOG/cxuEdkHUQ==');
define('LOGGED_IN_KEY',    'ShWIk6HKrWVYy2qyUiK1kedAsm2NmcqGEmEiEDqcM6/rLKDCQ/FTnMaqsJuvEQ7FOf3Ychi4rf5g2/9l7tQe4A==');
define('NONCE_KEY',        'JBZAQtASJ0M/8BwSkzd2JAmS00K8/jdDeFI32kAG9dRwvJckU7qpF7EoC21hc4Ttq8HBTshJtyXki7aZs0aK5Q==');
define('AUTH_SALT',        'QidaENPxQcwUmfmkzSx3/H10z29twha2y5oyj/AQIPtBJ+/aPhVULoQulkVb5J2D8o74VtK9nsrekXfhiRjpzw==');
define('SECURE_AUTH_SALT', 'Dj63tkfcSbG1gZ8x9/tfSNfRL42iBIK7Ebm7Nw4q53a3slm6+kuedPKr59n1tVdlHtG1PTnlPgaWP21m9osSOQ==');
define('LOGGED_IN_SALT',   'SDiIFVbTo44i5ot3INyY6F2uYqjBY+TO7nXmQXBLp0KhntCVbDxfzqiIGAcE/fk5a93P1HA5RCvYGndQ+2Yj9A==');
define('NONCE_SALT',       'o9Abss2OFYFe9La+cnbvfH9phTT2qXJHMa5mMRjqOfa/1781nbhuGnCHqQQjpvbihxXZ7vT8ddtQ2msmgr8kHw==');

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
