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
define( 'DB_NAME', 'elementor' );

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
define( 'AUTH_KEY',         '&NoeFdb*+JqrarP>Q`_y>5Lf=}_bT#t;R(U%n)8Ylhbv_xCJq@GzF.eI9,_c^_d8' );
define( 'SECURE_AUTH_KEY',  'M$8QRAkFeN:7WVsY1n]E:&!%H/KT9Y~u27Qak}>5Jdt+IjUt&>ke;(yOq7=mO@Z!' );
define( 'LOGGED_IN_KEY',    '5lFu?80k]}m.&j+s%8G,]-/ee@u09,+s,ktT%;bNb+]O?_HrW|pZ8=jI4G/lpDMo' );
define( 'NONCE_KEY',        'S_3}j5]9j_E7/.wFb{)9~mubbXix7qQHcb~RKNk!.wr<3oWgOJnmU|xoZGySp0ZX' );
define( 'AUTH_SALT',        'u7w!QtwhyxV2Rz Q!FPeWgNre*ajHdGSoH]&/.<7IHg<-F2`2$zHxEK7L-vRyhmz' );
define( 'SECURE_AUTH_SALT', 'D?A6R7pRXruEd.~C41q=E[KJf5pG%+^1YN_BE~I@L&b^V%B-=)2fAi^V543LkoC>' );
define( 'LOGGED_IN_SALT',   'c!b,:hu`gF7LU+7!VwC=Z/eD%?!PN~i2gl`iC+64s{pnr*6`aC &1?KwVmak0e[U' );
define( 'NONCE_SALT',       'fv(vPxgzqzk22DlmEOlZw!A|Q>7OCvd7#w[#)mk$?>MjW2bh #:/%B1_F$*7Y[09' );

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
