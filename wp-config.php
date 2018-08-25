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
define('DB_NAME', '2173440_hthien2');

/** MySQL database username */
define('DB_USER', '2173440_hthien2');

/** MySQL database password */
define('DB_PASSWORD', 'hoanthien225');

/** MySQL hostname */
define('DB_HOST', 'pdb10.runhosting.com');

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
define('AUTH_KEY',         'KlOmqhOaRzgVnFHDxozIwSxNlKBraOWAG2o1Y5nyQjZ2YAOLTLix7qjbMNpEA8y6');
define('SECURE_AUTH_KEY',  '1ITtvrxgih5RUkDIWjRqXS7Oj738rLgESy5fSNWQJsFwfA1nC5pJb9Vz7Be8vq84');
define('LOGGED_IN_KEY',    '1ybl94NarMIFRemCQXExHjKOdbeXns3phmfYmM1RSPctrP0zJV1TZLSRnFUNJZw1');
define('NONCE_KEY',        'rscrBJyBY3rzqexKE22w1B8boJTrIFCEDfpaC1xl1pycWpo0vTsvW4ovl8mXcv5g');
define('AUTH_SALT',        '1Dqf3fZZwcwjaYnpEYZOwH6Rg4T64tpJP7MM6fZGSDbxHodTgEo7vs7keh5jvgRv');
define('SECURE_AUTH_SALT', 'rYEY51ITlk8dnybYIDwFbsqWTrHfRR4UvjVKOxirxHr1nAHj80EXWUViR4Bwzzv6');
define('LOGGED_IN_SALT',   'VCpu7woGM8LKYWlb9dZKmXUGPZYX73BcsB7IJr17AF8RbiWGSXm3uIrGJVMD9zZg');
define('NONCE_SALT',       'T1WhOapuceYd3JUhEBcIEv9sA0zRlzv3tYschAExORPwW0PWe6MZ1NM1uJok75Fb');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);

/** added by Lap try to resolve blank edit post. */
define(‘CONCATENATE_SCRIPTS’, false);