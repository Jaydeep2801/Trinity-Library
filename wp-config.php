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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'trinity_library' );

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
define( 'AUTH_KEY',         '+=x/68+j@H=CFX0:9V-gf}xYV)Bk?{zp.363_yh*jL>F|[$4KNw?@jvG!hR<{=UX' );
define( 'SECURE_AUTH_KEY',  ')`OR,A-BJ;QavbGhv*jWSTNDiOcIw9&sUeN)MBgan#h4zG?`zsPBvvq6K^vyW./8' );
define( 'LOGGED_IN_KEY',    '=lKrOuFa88BIS{SJX*52(W@|U6-pGM/od%b`S.Q){A1>|`KXPrhpw68*cY<2-;o3' );
define( 'NONCE_KEY',        ';`#vQ1>,I?0ilmmt;} OgDK>%qb]D%E=M{>ij~$f>}q8i0Q$2 fyL#xf9!&NjW7{' );
define( 'AUTH_SALT',        '(6W>8^DN5FCqo`X=e]B9KWY;DftS|CGC10TaxsxJu}@sn|kM-ee7O/@5cQ!qso0t' );
define( 'SECURE_AUTH_SALT', '^9}ch}+@]$e?lG.P!l:w-iZd(}wCK6svfrMG7UiN [tivaQ823JqQ3NZ,w!?-^<S' );
define( 'LOGGED_IN_SALT',   'V_@Iq$qu#/@j1^>%i;,jf_cmp)t>S]M]Bn|^gL.+`Z(:ked;h5+2_<]Ic98Yl NV' );
define( 'NONCE_SALT',       'Ra(>?N6FZhRTussQS4+>Z:DcJS9Fo;J_wW#|y;M]E6Oy=w^mVl]USn?s2G%!ZDm?' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
