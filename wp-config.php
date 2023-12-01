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
define( 'DB_NAME', 'flufffy22' );

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
define('AUTH_KEY',         'ra3x3IvRNOjPalzxCObbBjttRXf0f9bVwckGsKuFUvy1KAsNQHsQGTVNhgnJGcYW');
define('SECURE_AUTH_KEY',  '4wWx0qxyIowWWq3AL3vG6xXIYXFGq4y0KlWaEn7eRMnbwYp5HqZDFzx7iECM7AnU');
define('LOGGED_IN_KEY',    'BIxPJubbPOnUBvRNTzNdjBZCEtlg8Gb9YHdx9a8oLbJJenbfN8XK5JatXy5hTud5');
define('NONCE_KEY',        'eZGU9X5A3YyE2Ii1866UDKPdFw1xlw8NCla3mkVI8nPuZGF9P3UejfgREWFKbPQ3');
define('AUTH_SALT',        'fQ9gbdtHlFDJOwDmwtGnQsZDVANJWGY8SU4ZCgEbs9XIlEmix9EevNFfqtxztJOd');
define('SECURE_AUTH_SALT', '4ctOb6YMghvRgx1D37dSivXpR1SsTzocyuEdivoQRB3mVLPvdkryDa5hYCKzi6Io');
define('LOGGED_IN_SALT',   'HGYmpsvCFZBCWxofTJHytqEME7akH5D7XcOIVwhgbWbBPQeWyww9KGlTj7UcsE4k');
define('NONCE_SALT',       'hgIqpmffk6L4TtahPCq9hO7kBOe2iEMNYndsqjIvI2rQeuGCSf57qPjQ5TS1ZISL');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


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
