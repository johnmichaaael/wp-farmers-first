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
define( 'AUTH_KEY',         'c0nj&z]ZgEX+Y38mJ%X}8lO->Ujyu34h,z{|=nKn{t,LL[$4F+8Sp, /fq9j(`cr' );
define( 'SECURE_AUTH_KEY',  'zEzDW@#kOleE!{[NKYR/??Y2a R3a.E4Mg[/ut&M?a}MqzADp0+,Jo+S2vi[wUm7' );
define( 'LOGGED_IN_KEY',    '7I&p_*<OO1yE9dw!)5ni;}KLaUJ5{4i/`yR#,HNU}Yt+N?hl1x/@_UI*%-M.SurS' );
define( 'NONCE_KEY',        'l@xtd,54)dH5c:g?pE#$$1$?J$dpq7:+)-Iyptd<Fs3wbI7(_}G(14kIwbB4tD/ ' );
define( 'AUTH_SALT',        'Z<|1E<4TJhi5UXP^-kDHeyqMev9D`pYg.fJPdr8fh3:ke8eoCsP5Ms ?Uo#;)P:C' );
define( 'SECURE_AUTH_SALT', '+t!Wr#}6/gwTA.:Y~!im``>=R!#3}9a6^!QXR)>OrZU5p}9j,/ju?|P<_sKfO0M`' );
define( 'LOGGED_IN_SALT',   '4dW(j}]|qhYoNqzP*j=+(Xp?xw1D6w*zGQ9R6T9H6I I`>;AiHA!;9Ql<-WBk$FQ' );
define( 'NONCE_SALT',       '^b YQzX)QHLr)_o{U1]Hax]A/oY]$P AG{)S9-6PrMU~U{zu)aEnv-fXKU(VX:?#' );

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
