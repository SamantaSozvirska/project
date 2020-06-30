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
define('AUTH_KEY',         'RIX2ldpGDdi+hO2hL6Oeykw4jEVmdsqS6H0Z9Vq+dOgYS4ShGOQOg9xZBiB0lhD0jY67s5sKMBZmkppO3rt26Q==');
define('SECURE_AUTH_KEY',  'ktOwMjAVXkqWfDyz8gvn4eveD/LFKtqRGFm1n+0qvjMDcyrNobcMso83LkNcWuPJbodprl3SonY+QJ3+qKHcmw==');
define('LOGGED_IN_KEY',    'WmBvCSic/rrO+PxXzpeSWoLIdODHUeBOHJKNoU4Bd2jlqKJyjXpn444g++yvBeomaFCWO+xXimLKvNR0oYuFxw==');
define('NONCE_KEY',        'd2+7V+i6lNC4ShtZ0BEg7PnbNL0Ps0w4lnozT4KAaWlZiW29cEf9f45Zsn2rIateGUG5G+6Ac2IiS4xMD64I0A==');
define('AUTH_SALT',        'FX2V5dF3Blz9AojE9mgOHEy5cH5K4642IpoXpifLULi3erFliXpjm/FK1N0TihvfPvcO5yc7UcelbaEfc5aQgg==');
define('SECURE_AUTH_SALT', 'vVthF73A8qbldR4XLPJG8HwG3x6HEfNvwT/mOyEs1RRZVTeQYQkELy+BmzkD+zID3UULmUN/WdEYQs7YiwcdtA==');
define('LOGGED_IN_SALT',   'vGMQStMMX8VwiwcYQrSmu8YGEmBVZKiOJSw4uLJiWGuwBH4I5Lqh53pc1CZEUG8T6XgmXe7cpVDpLVQmU6T0Lw==');
define('NONCE_SALT',       'msYWf10UkHYB2LY+HHwrS8Zq2RwsHlDxYE4iuyef5leJ/KyTKcMWgatEh2957q3Zjqm2Z3Xdgv+UbFCx9im91Q==');

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
