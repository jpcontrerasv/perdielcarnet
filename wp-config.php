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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'perdielcarnet');

/** MySQL database username */
define('DB_USER', 'perdielcarnet');

/** MySQL database password */
define('DB_PASSWORD', '1h2o3l4a');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'YZQ76qvPdpXHBy0qAH79qx3spQofkcGUc8pQNuPLmEtMtteptHI6HBIw92dT9Bg1');
define('SECURE_AUTH_KEY',  'RILZTDLpLvjUrwPAG18LGPSv00CjkLp3Lb3IlObG29MlyItENBiCN7NAhbjCK9zs');
define('LOGGED_IN_KEY',    'cUB7PwWEcCOJSfEv1Ly3ACEIPit0OhtjtIer452OF8DeIjl7v0nkafwRdYHN9RKW');
define('NONCE_KEY',        'MgFykyN8xQBYL6QUQjzXcjO7XBPUC47hEt4msHdZ20uQDGTn0occVh9mUk4FEela');
define('AUTH_SALT',        'ERcOpiMlQcmc2SfIaf4SxubqM3rGvGiNb3OD8cdghCbb2v9VOmXVxNS7QYJ5Dtaw');
define('SECURE_AUTH_SALT', 'rkRQ9IU2X5FPuznBWCG53XDyWnmAcfF5KV4cndGc4FtoM3dbU3DwGxLRGtgthHsC');
define('LOGGED_IN_SALT',   'pE30QNTBcVjuDCVzQoc4iEYhk983ftvHnE8TqQBGoK40QsltrvCvTnB0XZTMhggH');
define('NONCE_SALT',       'vL36pWAvE2gjFpwCF7kvFHozeOj3wfQg6eKqWeKRXeiUNH62eYzLjoJSPSPb53zk');

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
define('WPLANG', 'es_ES');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
