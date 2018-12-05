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
define('DB_NAME', 'esbcwp_blog4');

/** MySQL database username */
define('DB_USER', 'esbcwp_blog4_admin');

/** MySQL database password */
define('DB_PASSWORD', 'esbcwp_blog4_happy');

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
define('AUTH_KEY',         'P41yVQ0dkLeXkYkgyjQOD3lANl2RcXr6R19oYr2BLcljyZMnlukHXwDebs6Y7wFV');
define('SECURE_AUTH_KEY',  '8vgInH8V3E8ZuGutkD99rAndYYMJxlYgMdtX2KzqAn4Sqg3uDptpqnCTzXiui8jH');
define('LOGGED_IN_KEY',    'e1PaknCwXu1vjEfOof00KNkVwaA8MgcOD81Qsr5fsTrh7sLKxlD0zGTjWbq3BDzT');
define('NONCE_KEY',        'giNJXx1pFtxVOcwyZS3L9474EyLN8sqbg0iqvhsY0FsKLpFKn2T1hn7lmRIrknO0');
define('AUTH_SALT',        'IDp5oq0n4RvI1NrgD3TzqAeUuOFxEZhHZXM5IkcTLNW8KW3OZT9BnMRbCn4UGcbU');
define('SECURE_AUTH_SALT', '9s1qp4NkPKjinooNnJjnZhrmANU4bO7NRGeFFOz63iOwRCDpvy7FQKKPZy2oOCbU');
define('LOGGED_IN_SALT',   'vMVUBEZsKJA4kAOzf2oB1Gk6pkucMwbmQ6dwPHoxqIuLYbEF9t1NDY7YfxqkMi0w');
define('NONCE_SALT',       'RELtDOxaVPFSX5kiJp1U0uceiniuVUKCrtWv3Al4B2sybhWBcTDjf1OxsBJDaDzJ');

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
