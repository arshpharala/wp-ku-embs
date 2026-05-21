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
define( 'DB_NAME', 'embs' );

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
define( 'AUTH_KEY',         'i4y2XWVJt)p9e Hai6$K41O6doPk.JSqwB8b:rC5wsW!U/>N:i&!1.=RJ,V9:m|/' );
define( 'SECURE_AUTH_KEY',  '2:[KB<4Y k@XD#1J^!+NYfE^{b<+W8*n[7Fvryd7~XMj|HS~ETVBl6&8V>X+r>^q' );
define( 'LOGGED_IN_KEY',    'r+be/@O%YgV1T6-{LzuTN{<DP@^BG2>T9f -tI W9[yMo&bO.:ZiX|2A#mR~v%_L' );
define( 'NONCE_KEY',        '+)sB_=o}Mfx:TybUaQjbEgJ{[[UkhFI]8c3acy*w}^$KP(r`B!HkpLq /z K:Lz[' );
define( 'AUTH_SALT',        'O=4Q;ZKDYzbYKpM0}Bq|yMC#Yl,`)GeATI(|coeVJtl!/I1=%=0pWO1&h]z1{-DA' );
define( 'SECURE_AUTH_SALT', 'qzlz3,L}R19rcke !eNU_J,u8 1]53ZY1UU^Xxs0h;ukFDNWp,d<r<445AolEy1i' );
define( 'LOGGED_IN_SALT',   '-?;u3YB|[~wsIYN)~QPt:3XFDWT1=e[>S$pjYPiC+&J#y)M`5VO3SpBo_ogO9,Au' );
define( 'NONCE_SALT',       '5X%5u6hk*>%lFsTx|o-YM`=A/qcvV*5T0To<wiSd0IuT-1x43D(zbNq7B4G+L$?0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
