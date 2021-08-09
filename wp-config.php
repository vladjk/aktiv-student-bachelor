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
define( 'DB_NAME', 'b21g41' );

/** MySQL database username */
define( 'DB_USER', 'b21g41' );

/** MySQL database password */
define( 'DB_PASSWORD', 'GbZZd2qDB' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Filesystem method as defined by serverprovider - HIOF */
/** define( 'FS_METHOD', 'ssh2'); */

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'q%Of#p8S[sbuatj&5b`kaeb;Q9s.ZvqZoH0}f7_BBEcO$-Qug3JJX;g.tGpa(MNm' );
define( 'SECURE_AUTH_KEY',  'O13L3abe]79Yp6bsCju1qj#ZAQ>4yz?ox-cU.hHA>Z^1E]gQrP#L;z2EkW+.pb3g' );
define( 'LOGGED_IN_KEY',    '$IB+2U3lDAb9*2I853/7qVKe8n5rsRyj#u5$Y$.h`bqo4j<lQ!=y)7Is(3 c0u{W' );
define( 'NONCE_KEY',        'BOo`9Gprr(t$qoT(UO#$g)T^y cvV#/A69H(mEFf#6?@/hdnrg?M?y34=mMy?Wy)' );
define( 'AUTH_SALT',        'P)cRdp*D]gLIwp;!q^|<Ri>pE6Rw3e4ggRg_~0~q0vc-7O|r4#Tl^|S9@WuRsZ^M' );
define( 'SECURE_AUTH_SALT', 'jV}9|CTGmr}Qss[K;)}zdhbH5`;;6+Jm{x>Qs;P=czmMX+;9prP?qV|e}G!y~I)D' );
define( 'LOGGED_IN_SALT',   '`1#!sghKjGS_8-|[!)/]lBOZ-WiM|qYqK%m=M-qq>br.72-*lrI3ve&t08`&~AKS' );
define( 'NONCE_SALT',       'yF^^:X;0$.$6/A6lCGa%QRu!8)FYeL5|K*t/1KtIZF6o.~WDLUuT}ff$B5/}Q,*I' );

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
