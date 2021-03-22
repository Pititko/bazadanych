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
define( 'DB_NAME', 'bazadanych_db' );

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
define( 'AUTH_KEY',         'ebRgUJi57(57{mx1YO[BHIVe8}Kx1#>,mr&0%<Q`!o0B+bx=w0`_T #-+Bs+9D]J' );
define( 'SECURE_AUTH_KEY',  '#e!_TRvsgtb(l.X;N3Tl.-@/bSGc9$X0t?/1 5iE9W5pz =PvL#rhnuS?#GI37eH' );
define( 'LOGGED_IN_KEY',    '+T$^<B{Z@2Xr>3*r.0jJ]DoN1PSc%A/4g)cGFy^QDF8$BSoOI$]uw&+sQqlUM<9$' );
define( 'NONCE_KEY',        'SRoP8)*<4z|0*2jLZ9Yn7bO[3T.?:UA;ui9/-L{7wX~[}F@Bh$Qcvq-36Ax@Wc3~' );
define( 'AUTH_SALT',        'l_|Gr^ND18h:4D:TGt,Q>Y>B#B8@s2f)Y~Kik#xDU+eJ/F*CF^xG&hoOvq=~@8gB' );
define( 'SECURE_AUTH_SALT', 'uh$t!Um&Xd*Qs+~u^NIAIcCwFf!>~k;{NEr;UqpKSYS9xO?eglUjR;dG?r J`QVk' );
define( 'LOGGED_IN_SALT',   ' u!@VAq%ZRh&@rctSf2*7#aKq8$/^!k~2<)A=AB.y&z #g5{-_#<z5GAc*SE> PL' );
define( 'NONCE_SALT',       'NnNW6V)6u*ktG3.6=JL_H,PVZ1;~yEA/~pGwkj}*<}f`DAu4ShNj|*Z:a:ID w[N' );

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
