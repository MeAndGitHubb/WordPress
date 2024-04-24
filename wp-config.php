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
define( 'DB_NAME', 'wp_quanlysanpham' );

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
define( 'AUTH_KEY',         '{^OZ1L(,B6oJ_YJ=7+;n)^|aM-R@&Z&Uh6bXM)1]s%kC/jw,>vgKr[Wd*?%]j#}l' );
define( 'SECURE_AUTH_KEY',  '5|%pYIykBN}T}`.3=X*g[=CK l}_X{)R>hm]3D_R,XuFdYT5cgA~`B]3@h*[l!L}' );
define( 'LOGGED_IN_KEY',    '::4R`|IoOKCy(90M ^[FV-$X8*&%#Ua&>(N~Ej7+ZhCFf& Ql&||^Td5$h`|-~S[' );
define( 'NONCE_KEY',        'wGiYbm*wz<{+k3>$O/<fiqI|^76sk*>? 3jJDW-M6`&1SwRLKtu~q2wxe[3t:hyV' );
define( 'AUTH_SALT',        'XMKv>BjsWh4]2s,{~[rxY59F.<Ac-@]:UU EPAJ0()5yJZg<#6P+0|V6U3m(BYxN' );
define( 'SECURE_AUTH_SALT', '6(s]K@7J3GjiPFpH :LB;CkLfGU`MR<r8iSFqN<#5U!@B>`P7#ct5q_$H2B6UZY}' );
define( 'LOGGED_IN_SALT',   '%S6*a?}KHTd>($2cR>7[?`etyW8WX=4 Z9r0vud6|nNKn%QN2_N^*D+G#{V4x|Kx' );
define( 'NONCE_SALT',       '.5-q.J(s` lqs0n,y!pqgWr8U2_/ X{/ V,X-R;0*:}n;#[:b78=E%)PN<jt1G[{' );

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
