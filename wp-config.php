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
define( 'DB_NAME', 'if0_36103387_wp626' );

/** Database username */
define( 'DB_USER', '36103387_1' );

/** Database password */
define( 'DB_PASSWORD', '2S481)6-2p' );

/** Database hostname */
define( 'DB_HOST', 'sql202.byetcluster.com' );

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
define( 'AUTH_KEY',         'k8a5o8rid8xqebjh9y9x5yr77k3gqfgc008ih29vg5i9ntppewo61mqzkrza5xti' );
define( 'SECURE_AUTH_KEY',  'enwbv2pig4hjzy1y09zcaowpqampemf42dquiml0v1zazo81z9ybbrbh8f94oldf' );
define( 'LOGGED_IN_KEY',    'iadpf6pbkwb9ahecsddo3dwum5ioz9vycyc2mxflmredtjtgnj8j9tszgckbqjdn' );
define( 'NONCE_KEY',        '9lrjvchztgjwqpgw6nz3dqu3ei9stybqtmzmqdysvlopyewz1xolk9tis0v6ayc1' );
define( 'AUTH_SALT',        '4wbx0wxiliqqudv1ub8eqatwe16gavklwasgulmewacq0ymuafesagkdvee5dncw' );
define( 'SECURE_AUTH_SALT', 'dooajgm8esqq5tfqz625nnbohygiixfwzjcojmhegiyf201y9w0nkgmit467jwk7' );
define( 'LOGGED_IN_SALT',   'sxarxecwesj2d760aeacjtlzy6pikoa9dgqjsh6quzjmvwtbrz02jhvfqhcha63w' );
define( 'NONCE_SALT',       'x30eu8qjnvn6dv3ph9m5v1px1wjg21nvylalfqcdxdxuk7fki3o6r6oj8mnu4ngt' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpwt_';

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
