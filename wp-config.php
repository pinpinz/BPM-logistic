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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'DB_NAME' );

/** Database username */
define( 'DB_USER', 'DB_USER' );

/** Database password */
define( 'DB_PASSWORD', 'DB_USER_PASSWORD' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'dftfnf7nmq7t1sxdxey7vthanerd6ip2uufhblbtrehbjakf2zqrlqa28y6t26rg' );
define( 'SECURE_AUTH_KEY',  'vzocxbd8n4kaeoyz73nyp70t28l5d70jrs799avs2amxqjqgabaiohcqooztnyvv' );
define( 'LOGGED_IN_KEY',    'ffclkwfhlqtg33amkp1bd8ryuqromexvgpsniei9j86yys608kvflco98i04sxmt' );
define( 'NONCE_KEY',        '0gsyzvokxrjiszbnue7v5arzvxhtpnqe6drp8zhub8gefczj2ecxkjnsnbixlikq' );
define( 'AUTH_SALT',        'nh0etsq00jlbzv8jotscnwxvptps6eumvmau7p0czwvnaw533s9jxusqy34itw1c' );
define( 'SECURE_AUTH_SALT', 'yqfzqzx6cljzggre93a4kvjzmkukpjkanub7yakmrrzrietpnkdnwugjxjmknihr' );
define( 'LOGGED_IN_SALT',   'lnyhen07vcm3q3gqrni6ywzswhj8konzi5rzes6bcarwz06b4p7kxkivdu6bkdwo' );
define( 'NONCE_SALT',       'rcc7t2hdue8xgzmwxx5tn4oqb2kp4vnprxb37pcs2vfgolgklaeg3ajwzxdpmnqd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpn7_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

