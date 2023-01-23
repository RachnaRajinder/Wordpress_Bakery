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
define( 'DB_NAME', 'demodbase' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'byXc35wqD|zT.XZ-^ugd$-5A6m[cu^,,V,}xOo>wC,9?fAQ_z028(vUOoNV!WRJH' );
define( 'SECURE_AUTH_KEY',  '$p&aJqDv2c3J%+8y.]8we?jJX20;Pd|hq!+L&R.ZRjCv_|L^4H^0waF7>k10F<lo' );
define( 'LOGGED_IN_KEY',    'hWc24c9rH?#6DX@wQ`,Ml#YWe%7]l7VG{ FXv,&_q6/iPKJbwE`3b vo=dn^l~Y5' );
define( 'NONCE_KEY',        '9BT>8#[RR0uB^&q:LDQ-`VPgtg0BO[]3IXyl6YP(1qt0g}xeM}IBIud1+8YaLeRM' );
define( 'AUTH_SALT',        'rBg8?iyljBD2SFp;&x_^wr/19N@J(~0lqjkT,6zd:2b$J~|0g$ BISI[mdzm?WMw' );
define( 'SECURE_AUTH_SALT', '-hf$eka&=s=Rkt])TY2f}C5UyTYe+S_ErM}ig%S]kV9j%CN.);h31]nBl1.1;P4^' );
define( 'LOGGED_IN_SALT',   'NH})<O[,nj8wKp9Q)&+v.-f1:>@v[v }H*g7x3^dl0xv:C9iPFhWGL C(dn<nKpS' );
define( 'NONCE_SALT',       '}kD~>jJOk7n.%n_Hjf0,5|{@>l-21+r^SRy:0lR7Y/^whF/)|-| I |8GsP`8VZY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
