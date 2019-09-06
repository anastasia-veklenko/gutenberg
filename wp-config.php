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
define( 'DB_NAME', 'gutenberg' );

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
define( 'AUTH_KEY',         'rp0e-@x>oxWx%wz5_a$j*;PX0;fh_Y]y[J&sexGkJD-.Bf.+f(TC$bX,+(I67=|%' );
define( 'SECURE_AUTH_KEY',  'ne~fn[Lo-4R#0f[Lv>Z5R!yS!991VxooKKLrV`k,,!hD(o8F@E3BxLc xwKzei5H' );
define( 'LOGGED_IN_KEY',    'Cw4<,|[g~1s2{p t)}9tUw!<0k=TxDfN_XkptzA-U[<*C8f|;t+WZ;}>wk`=yfPR' );
define( 'NONCE_KEY',        'hAn]G%X.Lu|mN_}O^KF.e=wqF(-y^9/%]Xg4+](N3~>:cih&}`@U/i}%Evcvm9($' );
define( 'AUTH_SALT',        'G}uzhKU5EP}}CPx^<g~K;3<ZtUuz>AFKO/0tY=<p0{y7%>_j_yQp&1ZN^y~7ca}:' );
define( 'SECURE_AUTH_SALT', '6;8 y0rs6`UxZ!0=I_Hw?,-S1Iiuq7;E;|`-1::K!lDs@s6U>cB|u<D?s**N&Y:i' );
define( 'LOGGED_IN_SALT',   'yj1P=dzD2rSyqzpq6,QtQ|>S=*3E9U -^,c%XbS-)gC(^7NboIoV/!6pMfuf7v5Q' );
define( 'NONCE_SALT',       'tL43u/^lEKWD,C5.?Dk$|fazHFlO|W]w}PX)a%h>!H>:(1~SRuxdoZ1+-}lajO!|' );

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
