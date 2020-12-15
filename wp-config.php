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
define('AUTH_KEY',         'ia80VOCnRF859n8tTl1fspvwAc7A5phiX4qgju3CNI1b+XZrWXxOuXKE2q8ilZEcFv24YadWtcRMZZAfCgqbnQ==');
define('SECURE_AUTH_KEY',  'ZDAsgNRh1LjaGOEQqSKtsQz4RYxRGxcZ0BPmkMo7OvRNnwWQ5BQO1aX5t/BSll4/vQKaw6IGi0MQZIjjcOyKYQ==');
define('LOGGED_IN_KEY',    '6Jy53sUUTnJoqVTzMOjZJQItY9Mj0+FDs/1nmg4BDjq1RwEOdaz9sBGNmQT6ZsdGhN2+Maks6dj3BswIuwtXDg==');
define('NONCE_KEY',        'EYgZd/kxXloLURjB90xpko4ePBl44QcJIDPyg7MGisz1TRTFeBBWkk1xv3weervjp1TNENu/IBXkx+9gOO3ipQ==');
define('AUTH_SALT',        '8+DGK86yVv3IL5MXBqaAerMspbnI2tiLlbRaY2zfsYzqLWp57wDUtBOlc//F0KE7OjkWe+N4XezwT2RfD7N/LA==');
define('SECURE_AUTH_SALT', 'JIavuAlxwCA6cNAY/JurkTLqDVVOUjl4o7exHZ7FL0Xmdc/h++EisdHLBsh/ZEaJ7L6z+Q7gcmK5DVTwzCj8vQ==');
define('LOGGED_IN_SALT',   '1iiEHxKkeNipAEbfssC4PyPd8jBjhbN59Wed+AhboOdm8ecGIV+pu2xZfND7soyOyhSwFWgSHZunv4Yhg1KOuA==');
define('NONCE_SALT',       'o/8Dr+IUncKVAu4R1rlTeCxAvDqAF79BB6icauvYfh0rhmI53y8iiopFRQ8WMfST/seAghWHbMSwaafq8mJ2QQ==');

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
