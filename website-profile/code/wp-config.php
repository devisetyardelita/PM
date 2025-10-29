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
define( 'DB_NAME', 'db_gizi' );

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
define( 'AUTH_KEY',         '+uxj5HQX)&Ul6Ek9%qD^Q/Ys4Cv_Fa(b,BS&%^nt2hISv(x2DT!B -V@`8=PZ~Y$' );
define( 'SECURE_AUTH_KEY',  '7M;p9Z}/CAHC8(Q!U=AC.Fv4fk< as~4tS1*M55G`j.6d9ye3p67!$KbMBQ5on%?' );
define( 'LOGGED_IN_KEY',    'TD&3G{wG6QHh1^+|#:{K$!hw#thrgR4:#-=Xp_(##G}YR# mEwl,<zRH#<@-[VI!' );
define( 'NONCE_KEY',        '$J8YI!_&kP{;5ogUR(Y1EkT#ua/TVl84Tr%nb4!$8g~z&G:;<d0{F1b;A@;lnY S' );
define( 'AUTH_SALT',        '&66l$9wAC?IxY|>QG~eAh|4>}jt$%6AUH=37>g,ek)}&vb@g%a:by+?#{Ah{8ud+' );
define( 'SECURE_AUTH_SALT', '#p8^0tE#[%Z2c9jxaWgb#Z`n?>?koNW36,)@??61Xl}(_OGHrncU]*%bNo{[[yui' );
define( 'LOGGED_IN_SALT',   'ES^mn*U:ZIs3$,b2ociHhkOCkBe%Y8fr-HJP!MM<6v cWO4,)QgZZLn@l`h(,(B5' );
define( 'NONCE_SALT',       '<&FW-]p|2h$B^CqUI}Y8K%8I=+BBQb>Nuw7Vn(WE&$?^v:]VY;m5(Sj.)b30 P71' );

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
