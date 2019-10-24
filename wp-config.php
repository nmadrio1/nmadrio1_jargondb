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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nmadrio1_lab1' );

/** MySQL database username */
define( 'DB_USER', 'nmadrio1_lab' );

/** MySQL database password */
define( 'DB_PASSWORD', 'alfredmadrio13' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql.webinstitutoratwork.com' );

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
define( 'AUTH_KEY',         'U<ogN^_<*9/qjiE!dr=-xAbD[`y48-iat?0-woIGYEqmZUx}K$f3qp ?%~Pfu()n' );
define( 'SECURE_AUTH_KEY',  'Sz` 1#BXN *lv[KM?g}{//%X-,p)6P.:x:QEzj-,qUk&cZ%uKj^}Ly>j~|^El1jy' );
define( 'LOGGED_IN_KEY',    '4f~=L{!8lrAT%m*|T2}i4Yb[]0Tg7VFP%2$&DM(//V8^P)=3O%D*xDL?5Rtlac#V' );
define( 'NONCE_KEY',        'GWI6>Ppm:+{aK`^+Q)lYDq~=$PV`~*^cx@frs|$6cWwYF;*R]=9Fq-~]K,c/-LEl' );
define( 'AUTH_SALT',        'W2e9rDU#}gf|LFzUID-Fp2J%l$Abgu-S#y%5E4FAQNL!xJ{Ft7jcN~<~>(+90/1x' );
define( 'SECURE_AUTH_SALT', 'BFN6xF(^ovf._{H.6%*}Tp^OebB%N2jx3)*%|B#T%1K`Cv$hD67fAn!MOE-]?XM!' );
define( 'LOGGED_IN_SALT',   '=vU6%sZv#F4x6gXv(2-W.l<4UkJFqpf!G8<z-[$HaV=2&R~ &T`h6+L8mFTfTcsf' );
define( 'NONCE_SALT',       '+5X8cwD*/k/2VI=$BM%m||F!u1A*i~Ak$f%{FOq<rClfO5L^|(A0u@)V0BoJVU4U' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
