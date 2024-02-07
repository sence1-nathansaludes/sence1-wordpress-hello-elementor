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
define( 'DB_NAME', 'hello_elementor' );

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
define( 'AUTH_KEY',         '{HX}5!QvO^|m2@<3=Aso7aW6*6&}gb7mFeVI`n0sbv`_}&+%|M:)b>.mNh:xrIy<' );
define( 'SECURE_AUTH_KEY',  '9`[&O8Pn/Qc7Ja_U||jKtZ-NRdaB$Ii|#NRem8!aTLIk,Jj}m~oT4$X_GI V(3e?' );
define( 'LOGGED_IN_KEY',    '4)VzM5A79`x~NX+/vn,7~OF,%2YzWQ<DLsa!|Sx JcK:n4QKP.o:5q;YeC_b@WU+' );
define( 'NONCE_KEY',        'M ;~Et)Ka#* .Pgd?hFm2}d?cGX:@FXSk,yIn`?T%V}2Qm7jZ`h9]k3*r(F}(Z?B' );
define( 'AUTH_SALT',        'kf!{EJzmDE<rP9$#ScXv>)>O4CF3CkymvD;u>~xiR|s? &`-VQ_mi=iS=ab5Y4L]' );
define( 'SECURE_AUTH_SALT', ']cIe)=QkZyDJ:P1#bf1os11x,R/E_T6n2TSd/=9=m6b5;PBl@X48{~GB8*/;RmSf' );
define( 'LOGGED_IN_SALT',   'Y.f::TU4C+Ac9jPMr<uC+R}{r^Q*:*~070eZ[GFvfRL2||=vurO*:h.*cm{!vn^m' );
define( 'NONCE_SALT',       '>r4+:NkN3lEKZ){1FZ8@&3})! shKBUU9-nY<p?~ZkSTF5gzPPK@8>?VkL`#$Ant' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'swp_';

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

define('FS_METHOD','direct');