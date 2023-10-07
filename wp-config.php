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
define( 'DB_NAME', 'restaurant' );

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
define( 'AUTH_KEY',         '>o6:y>*?$=O<}d-IBF[%Q/j%cu-@%hqz4]c4)4B]<lda?K>A+wV)&N2d?{=|Avde' );
define( 'SECURE_AUTH_KEY',  '54z|P+4zq@*iBItR5eTM21<PwS}eT^E-AF;3%YvJMj0xX:Lb?7nCOQ<<J5n; _<b' );
define( 'LOGGED_IN_KEY',    ')G/)5%Kn:,ZZ||$j|]kU?(N,^66.`[n6Wfk7VxZS:TQn-@:rKT$Fu%:<eL<c;md*' );
define( 'NONCE_KEY',        'H?*^WAvOR-z*Rf=#&x?n]TEa/}eW$S#8^XM$GIY2>=[FvBJkb%3+R!XkO|@-JyUK' );
define( 'AUTH_SALT',        'r<<o?J<fIFNvn`][o#x7Bjlm{|DO1*:T{q&?rsWp&5BHN0lUiH^fK)`kS</GP*n=' );
define( 'SECURE_AUTH_SALT', '; NxNv]M;d~Sy:IR=S;y9F[WZlhd]s4Avj2ngFE<8 >AmwB`o4>f?i3|;I%cqoD ' );
define( 'LOGGED_IN_SALT',   ')YNw%ZXj6f}@WJu+&movJJqlE6u/p~O#(~B#v=0BYPsX)~hL4f3q?~L>:+[OnM<l' );
define( 'NONCE_SALT',       'V2b2L^0VIva]6[[/&r%z!NXLSO _zy/Zo5V7v-@HjQ0lSw15mocNe,m):@S/{`=>' );

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
