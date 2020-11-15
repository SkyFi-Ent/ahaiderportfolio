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
define( 'DB_NAME', 'ah_portfolio' );

/** MySQL database username */
define( 'DB_USER', 'ahaider' );

/** MySQL database password */
define( 'DB_PASSWORD', 'asdf@1234' );

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
define( 'AUTH_KEY',         '7nPmZ1Yh0C2o|Yn%yqD`r2m;onk~fclQf(KO2;^^+zi`B9rXb88#vo5)Ud;^[:mZ' );
define( 'SECURE_AUTH_KEY',  'mNB&i](TJ*;(<B*ZMR,Rv]zQ}xlNB4UY fO_eTt+V#,vY`z-`Z%c?,2ZQkyJWrPw' );
define( 'LOGGED_IN_KEY',    'aPZrN,yn;s35m]vE7Y,2tp}=O)j{:DGk9KF9Ww.?LO?uoC<4BuJ(l&;%FvUB|9rP' );
define( 'NONCE_KEY',        '}0BmcT48,tYL0-otu`eMS{a7}r;+h!#6HxxT,SWz2U ;mD~m3VAH]%5SYL4D+]{@' );
define( 'AUTH_SALT',        '+8YhN__m;[IS`=1/ ~~]cgjX#vpN{M:y?sP&0pDp.wNFKvD`X7~A0a*T)QT3` 88' );
define( 'SECURE_AUTH_SALT', '5DACIA(:^2mmyl&MgP:&V3DIQl#QM:[kg-HZHf]JaqQ`B^v)(Pn6|r|F=Xj}}o/i' );
define( 'LOGGED_IN_SALT',   '~!6Ks^t-QLI/uk+RVQW~$Iw=!eB%O`XpZz]lF28Hak UKpE Q(i&Q7{nLnN)=^zB' );
define( 'NONCE_SALT',       'N@M4/xr09]5W>}T(q0[Y;;`QK`zWE9T)8bo3#^e@9OW}3f}Y/+^wg.dKxbB@[7z$' );

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
