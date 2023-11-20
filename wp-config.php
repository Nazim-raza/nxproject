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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nxtech' );

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
define( 'AUTH_KEY',         ')s=Tg@}Z8%M:S&y#kW|jx)C7$GQ 3&OG7LOU6tL|)Z+Q)8%V{v^vL*_(?`>,jz0T' );
define( 'SECURE_AUTH_KEY',  '|ug+pf,C$zf *iz]39i;C SI19.<Mjf[:OO9/($WyUU23i|Q2N@,4pF/,VDR|6fG' );
define( 'LOGGED_IN_KEY',    'I c`Ms_Q|@=L)c-,{5L;R es^%BHoMGse,N.6M)Sm;bBub|qT?es]9b|/.H!v*= ' );
define( 'NONCE_KEY',        'V-(};)<8AbWGK .vf~1E~W%X=..0t|_~Sg7CkOHDR[gDO?1X!2):;Y}O]FJ6p%ft' );
define( 'AUTH_SALT',        'b8u::6d`wj/*VbP_HFy6e}HusI+p$7ma-JTs9oN6Uy)Y$jpi~.SR3W|.wa6Rbao.' );
define( 'SECURE_AUTH_SALT', 'lO4_cwCb3&!,)XHcLs?a@NzT/10,nI&-ixE1;4#z~5Mk6olSy2zP|A4>SCgsY..X' );
define( 'LOGGED_IN_SALT',   'S{ssBh;q@=ZWr7=RlA%GXWW{i;4/%<Y^VfZC6@Y21|V@.Ur3aK?:[xY1O]`${i-7' );
define( 'NONCE_SALT',       'xD|vHe{]S=KTtA/iM162W6w;0Fp%e%1D0[j4^t5^m6q;`i5/oh ,0>/H?O8I|0WY' );

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
