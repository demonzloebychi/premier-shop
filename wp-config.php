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
define( 'DB_NAME', 'shop' );

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
define( 'AUTH_KEY',         'J[R-xw5Z48/uyUrC8bW/qxBfut;nJi~RjpIj5|Q]68-%iFr? 3IqbjE!|Jbg$3G-' );
define( 'SECURE_AUTH_KEY',  'H-&zdF[0?I!UTH&Mh{_h%H)EZHFTioIX3c=t%}|(G!kP9p-K@R=g+~vM`[l,)QSg' );
define( 'LOGGED_IN_KEY',    '1_nV@t/GrqwRrQ:~$M-YK3g@ZL$wxOdNfHh#)=%1hZf>Zit?htZWCCn@XQuUZYP{' );
define( 'NONCE_KEY',        'F3/U!1zhttt)=-B[GRm:T|gB?]2.U`9V5?U`<i[WXg4z JF`_Vq]kT:T1t}0g@n#' );
define( 'AUTH_SALT',        '[hR*U6PvgPG5VH5CJfhpjADFK82]L%QK1}$>X?LsXP$tW`oaldk|w#8z<eS:J+wb' );
define( 'SECURE_AUTH_SALT', 'xD9v`nb:75fY5/#D$BQ~4%xi)7y-W8H%B2>dP^LRUC=s+$@INM%W^fD8G@XmyY@j' );
define( 'LOGGED_IN_SALT',   'U[f$+[;6z!e>[_jKER)<ZM<)uBa9t2mytIL9SD/8Jv.b8dUg?{&Vfl|ii4QFx00T' );
define( 'NONCE_SALT',       'jf#L{pJ`~KWq_%KZ:}T$[k`IOM/D27D),c&[^Dm&po^i1]`}M[_09%_DVU6jq$6&' );

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
