<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_602_core' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '[iGm@EptDggZ!nJbj.,dq+z(t*U?Kb^X)v3D7DHbAJ&2`@!=.E<:zO[aF/F4M5mS' );
define( 'SECURE_AUTH_KEY',  '8HZyG}/4fxf:`G53OK;l2QdpET9+.os?ksJF2 =Y+ss4>{~[mc)Y@2{%PDk/07};' );
define( 'LOGGED_IN_KEY',    '@O+=vUaL[4jhkc7cJm8h<nZndfX1?k-)$M#cgRKZi878RJ&j%o5MA`pp2jHe=>gM' );
define( 'NONCE_KEY',        'e17B7pPy`Qm[TTJ7VzC8L[m4I@E=jpJIj#YPtS4e{hPp5Im4HI@D4|T+Z%V7 V[R' );
define( 'AUTH_SALT',        '8hqWfxVOpA88;BqEEu1R/hz*,*[i)0m,;~R`gAs 6{r&J0>F- RGhzs6hs]C9[,r' );
define( 'SECURE_AUTH_SALT', 'AnOWT7egr>AriC:|kP][fP2W:7^vamoRAGG W!myd+Tu4&2I$7RP$=4/)dU:1~a|' );
define( 'LOGGED_IN_SALT',   '2WUJEoDm97>(HIprkB9CXKK:n2]MPk<k96>,#3O6n-dNC-wBSObQk )w<>EVOxNj' );
define( 'NONCE_SALT',       '!cjHp)tE!|!!~Hf6?6Du`Ns%T+OJ@|n)eg,+aF9/PoUC:GM_BN1UdXL#P2kcxMpX' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
