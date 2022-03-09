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
define('AUTH_KEY',         'NrkwKkBn7/V2pzdkPefMYcXqhB0b8gwy18mDG94F8dgGRweh/Iv6nDuWDQqU6oHE7kFQo6n3bidAtFfhDxqXhQ==');
define('SECURE_AUTH_KEY',  'E++NXOLAZb480h1d+zDIo7zRmZ3nQxaK4jKOx76noc5vU6fZ6K6wYu2ayXa1sl5ik/z++LYiPUBm/MQgK0bRtQ==');
define('LOGGED_IN_KEY',    'oWucT7oLlU5aNIjkVdZJdkVIq8vgqoOEXQAqUf77mNLQRvrestNVCelio/5MX5IAFruk1jACUywPExxuVYNQHw==');
define('NONCE_KEY',        'B+fw+39u/lKYPLd4gC0HOQcOluwoTVgycf3fYqLJ3rpVl2oYHkGHqmEabkPQkeudf5Lt40jEhlhvvXrUuLpElA==');
define('AUTH_SALT',        'OI6g4jpWRcMSTjVtyQOuMQf59S0MKsA76TMc6gu+c2b5XL9B+w6jKjMiNAbDfMK4ZHrn9E505mPB6DwXSZEREA==');
define('SECURE_AUTH_SALT', 'uxdo+er4cOJj+s8ycXW/xbaXHFaCcvzBtGGfFH11HCanSNVIaI9eECkZjGkCMHac4NLyamtV/jBr5XSWlcRQrg==');
define('LOGGED_IN_SALT',   'P6kJ/FZpon7UQ14j2f+2dH2D9HPHWAG0S2AwBgX10MZMeIVfyjCueCNRRcA+Jp6CXo7Jj9P1SsYQMTqlGpZYVw==');
define('NONCE_SALT',       'vkMu0jBLklIPwJkdxI1I13meFRTzmRMAtffamQr6tMj+Lt2oMiv1V3aTwtkP8iJNiCjcVsrEqyHnaGbAsdSbtQ==');

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
