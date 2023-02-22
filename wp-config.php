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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'a]hXn3V1!ixp7M8kD(PxIl3TcvonlR&QNqW$LI;s/Kp%5GluihgNtH[lbKG?~Z(d' );
define( 'SECURE_AUTH_KEY',  'MOu>4XqZ#9Lv#oF8WR1;Liqf2+VTHwuEQ=6r]:E/QQ80eS|L;i~Tyr e ]cw,N6i' );
define( 'LOGGED_IN_KEY',    'Oxe8bO:3(7$ p%`4QZUN%):Osft{o5Hx%*D@YAZ%)=|=T#$;Bg28K>5h[mff;0ic' );
define( 'NONCE_KEY',        '$(LZlbZBeh-:w%m_6kdx8ELj?29;$_<n%&8EJhS!!+EA5DpnRYJJW$%I#b?}$cZZ' );
define( 'AUTH_SALT',        'LXs.{:b9?~~g@|24@++/eCI5#-aZ?h{FTu}A}Yh!b3vhH{%8-:upr,g($5 R[4VL' );
define( 'SECURE_AUTH_SALT', 'S*PkLmQJmzG9@+yG$kd}16.-//gx|eMOx@2kQ*(x@PwrE}gJ</ejF{gKG:vGPu}d' );
define( 'LOGGED_IN_SALT',   '*J6Wu!{,mZ?t9F@!K7>NR2V/k`z3j~%oxI$9|1J{5F Y/6/<W*K _x-j$. Vy&c8' );
define( 'NONCE_SALT',       '_uL}M?oCNvJ_Q^ohq*L%};UBZ<>]!f:%F5Cv33)),VLL4<o* [pMauv)iTQ+A^SU' );

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
