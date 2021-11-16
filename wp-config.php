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
define( 'DB_NAME', 'WP-BANHANG' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '&!Q_e%`Bv3*H+8jHx&0lg1lf*],kSX(G]VQi|$fK[%H/ -T1wt10a.-V^q[i~1%Q' );
define( 'SECURE_AUTH_KEY',  '%;&w&2N#rf-xHE7CGw31cQfN[)d@qFw-+D@eETrh65]I9 J{Fo!m+>hCIWjfTU)>' );
define( 'LOGGED_IN_KEY',    'ls9a-)]0fM[u7(FiHXlit2JMZ`Em>^A:;Te`E[3t~t+oxWOb6L#A41q[jzQm{kKE' );
define( 'NONCE_KEY',        '>BGGres93|N2w<1$/HQC8;;3y6uK4M=R81<wO_GxEiG=>rn=8d:O(.!4BtI3g7f]' );
define( 'AUTH_SALT',        'ZvZ~O]KEgXvF};*n[;s?+!Ou_Pp<.>oRn6W.$G@EB;}FDsS m!)@~_i!/,wJ0q)H' );
define( 'SECURE_AUTH_SALT', '&e)7Ilr/Oh$[_mZ#6M<E?8a,Yk6C>xI<7k{heR]C!NGWVIT-PneGmT$+bH<u9Hm&' );
define( 'LOGGED_IN_SALT',   'F^Xz{,|,q^8h[#;?qfgU!)@w;#Y[1zpqr38-7=5ht/1iND+I=%@)dfp=Cq&?C(@v' );
define( 'NONCE_SALT',       'lZKBB.zx.t*_gd#/Bl>DHuh:+/#<5vKOJ=rm]NMP8xQBT@FxxUg?J.cd gp@XGW<' );

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
