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
define( 'DB_NAME', 'la_vie_des_plantes' );

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
define( 'AUTH_KEY',         '1~s;({T<`w#b:dPe^IY>ul)o70Y<o,tl=XJVMQ[i[nGVa$hX1xtOWEW9etJJE43}' );
define( 'SECURE_AUTH_KEY',  '+F:&-=*)N ;5qw<V+4n$,O,}7JM)l%6FCRaI.XzEWq7<4(As<*LJ`RYZfyOc4{+R' );
define( 'LOGGED_IN_KEY',    ',@):}y?roTcWL@mt+ua<9NRJ^xm-=5Rs@AA~[_IG<^(cGESDT|nS}nu%cj90<URw' );
define( 'NONCE_KEY',        '=3&vVoe#g%@*{lRM0uB{az/w*7`<m]%$)$m=~^-Zue]jm,HjKk4T-MrPj^REdh.,' );
define( 'AUTH_SALT',        'k7Q2aHjOZ$N 6U5>R(1Yb2Y r%sTN=i-CFG^@{l%~YK!S4,#b] j-:hN_]`D)O~(' );
define( 'SECURE_AUTH_SALT', 'XzvHj{C(n+@Z1DwFD>O8fH=S(R :DfJ1i|Bf|kJn7.Dkutl)@k=F&HDh[F`UNhG$' );
define( 'LOGGED_IN_SALT',   ',Z3GB{%;2Ph[|2$:}-r!W:?-g_;cJ2/S]0wlqh{Ca$<AY2*Rj_J8w}jS7GgCAr@J' );
define( 'NONCE_SALT',       'lzH6n?_ YB}8?M:ds*.@LUsYu72@7vM4vG1Ad05KpTv5$V,:IUnTz=E0=82{P)[:' );

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
