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
define( 'AUTH_KEY',         'cLF{^hUrEQdBwD<Z3m2t(ON_o6Ix!guONor8yt7K(fl9J]L?IJ?3OUXlq)dz7}[H' );
define( 'SECURE_AUTH_KEY',  'vU:gy|rHk=<Q@m/M[JH^8^{(#}=ty@|CKL+8)}rIERB19cdU|d9.Ii.}>,1Oav4d' );
define( 'LOGGED_IN_KEY',    'b|*++v>y7wo.5B_u3R[}x`ZYH!]d%%O6Utfb5XxuK@g&Rs!*JJw#HW(s</r:bAkc' );
define( 'NONCE_KEY',        'XC2N=M}PRw{Dg>TUG7:x=ZOdT7XgtL@R}P~x U:wfYEj{u?[L.~/CKB[m:!~Kj*A' );
define( 'AUTH_SALT',        '=!u}dEm?BcDy(=#W.vH,</>0*i@A <cVHm$@L52-=Qc$3z$/40s[]Uje6g@rJUV9' );
define( 'SECURE_AUTH_SALT', '@~AOEF>#-O]am` QL00mrQ=Jh&m;j`t/mmAJ4yT1oX*m1+w2qHQ$I#DZp@L2<! p' );
define( 'LOGGED_IN_SALT',   'Io^IJ9~hj}IKwHu}{@Kpb{fngTNO2;|pn7Y(#WYU|3t4),]-tVwAas35Ptycp-HW' );
define( 'NONCE_SALT',       'O;9^~=fJ0RPDK)-~MoUW~*ovv2T>/8H,(9?-RzPw3-~8d.4t,2g?]?_{mALfMjU ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
