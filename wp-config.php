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
define( 'DB_NAME', 'word' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ' :e,!NF(i%Nwu_SFoGR$KvIJ0n.Wiyr66f5h;gQaMkGpse]hzE{0T8a.e%9A?f6B' );
define( 'SECURE_AUTH_KEY',  'BBQiE5ZyidW/:<^MxhgZQ<F@hac8|MQf K/$kW4I#Y/Y)y[7C&ABLtQUPU,*}.;L' );
define( 'LOGGED_IN_KEY',    'Arw4KK1Zin|b.uhAx!7UQ78L[d0 <b.4=R*7Q(jOO%</1`BI=_bjGDfT:fc[3kV%' );
define( 'NONCE_KEY',        '~9&X95u<{]UbMY0~|SM+36B9[7rH+]7kQZCWT5#&((<)B{j94}}JOiC|3uoG6,+r' );
define( 'AUTH_SALT',        '&Ez5+SB0iT7OqQN~&F*!VbX_pI43jE]L/:vS)n:j]C,L**SjzeK[>Clu$ oDF-xg' );
define( 'SECURE_AUTH_SALT', '[*)g:)/u?ybzo1+9R6BIw)6GBQRy:tqTFX9*G>x&/NvY}} >%9w](E~u`j%C5h4v' );
define( 'LOGGED_IN_SALT',   'ZdgzS.XsUwS|,>lTuX00*XZ]eLxpMD>_[3!*HqI@^tCcS88A1tgG_d[f+J^PQ4k ' );
define( 'NONCE_SALT',       'M{X(a;fh<w+eB0dCO+CWBfa3x3 4P9 >*6P,e$q>#zUSiGlQn}Z!t&4!F$n:I$u ' );

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
