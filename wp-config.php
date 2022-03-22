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
define( 'DB_NAME', 'arp_wordpress' );

/** Database username */
define( 'DB_USER', 'arp-laptop' );

/** Database password */
define( 'DB_PASSWORD', 'yamibk11' );

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
define( 'AUTH_KEY',         'j10~ 74R/.Gbuq@y.za-B* U4u6^f;)2kNq)0;)DF]jx4WE$q]4OzU.Q_ol<&dU@' );
define( 'SECURE_AUTH_KEY',  '(WIxk1bw$rM:R[e$lJ/nO+|vwEu`yO/>1.bn`JhNBY#Dpa?P@fm0%L)66XL^{7O:' );
define( 'LOGGED_IN_KEY',    '#e@)>E0!lT$$7yWO9gM/rA.?R4Bk9~9Il7hd^j:X{a-ZhUhtSv28=.~9(j.y* GM' );
define( 'NONCE_KEY',        '=nh in-+$e&BjuX4.qs0%A;To6L^In_4kVW/yamDkFhHNtMR<o.oB_~fVE@g+__.' );
define( 'AUTH_SALT',        'W;kO*q9uV{^aBwjxqhk^&0^G(]8a;Ib5QVszf5D<}E8FdzWyY:%@F~jUq?Z*nbwj' );
define( 'SECURE_AUTH_SALT', '-6YkI1=7vQjc79a*bS<6}w9Wz=CY>%s*?xGt 4LuHf<`zw)PF2F`;.Vxv^9(M]zS' );
define( 'LOGGED_IN_SALT',   '(4m/l@l-6}Dh[TSF$~{u~zz=Wy2sn.j>1ezSZ3#,?c=F3_bF&E`&v}mn$V=s|oSU' );
define( 'NONCE_SALT',       'C1]O~{h2OgoA{^-?#T:2^pG=KC9E!G3G][zK}+3YA0(HtD4<[ClJ8w@6<U-(-dT[' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
