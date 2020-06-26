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
define( 'DB_NAME', 'projectfood' );

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
define( 'AUTH_KEY',         '>2Yu<)*IST JdiY;T{e:iROLgo;4f7.7*_t`A2@_p0AbNj%=KP>;j@6_FD()9#kO' );
define( 'SECURE_AUTH_KEY',  'XSM>~WX1cQ|QS2~?6YcLfenOt_euYrN~!jshWF`]Sl#=6,IbxXP-SlAH*yCm@X5w' );
define( 'LOGGED_IN_KEY',    '*HUp36c:y<6F;,DTZq{AdCpeaG6NrIIlMFeODSr3Nh61-dnh~^QX.v1y9m!1~L@D' );
define( 'NONCE_KEY',        '[S+p)z_k~V!m5?xmN;2FSXz. ^l%1oDmN/Z:(%AvbsY+A>D!tfu*vbFpAh9Ar|!2' );
define( 'AUTH_SALT',        'Tzvjc_!>zJ-M<%1}x]G u^.&1k)ORq*7drG-_IShp}>&?B]_-X6(mnTCNsw19.)3' );
define( 'SECURE_AUTH_SALT', 'kV7_>{w&3I3mZSOVkbCdE%41jS=q25jSnCxg_kvcl%#idk}&0yX4I_8fTDEKh0N/' );
define( 'LOGGED_IN_SALT',   'z,8zO/GZ?`r0QV[Px[3B1>q^I}d;#.#9eQ$K0+GYr>.S8(?Ph1SwqB.[0|n61Tx&' );
define( 'NONCE_SALT',       'Z[~|;1L#[J@CLu@gEcNW ?KW_^S%H)p4Z}/rF/}5<E!G0&z*_s[_kegM13/|pKk/' );

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
