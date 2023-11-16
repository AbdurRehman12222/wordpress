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
define( 'DB_NAME', 'devtestlink_cpa' );

/** Database username */
define( 'DB_USER', 'devtestlink_cpa' );

/** Database password */
define( 'DB_PASSWORD', '3$~xsMyVY[&+' );

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
define( 'AUTH_KEY',         'CS/}i^rI}NTb=XR}+AHl9IVmnMG:T~@bdxg7V%%z.`%j$<KLA:2^VvrtqN(cBiSH' );
define( 'SECURE_AUTH_KEY',  'YbJjNixl.Q;<B]VmaMR!S,5bcEGrEAdIA[r$<SpJXG}vT N=bv9qkE<-s1[EpKmx' );
define( 'LOGGED_IN_KEY',    'WjVDT/J2HWF6q/*50d7R{J=B)|4!&s{4a4mu4~?tB6,AVf< y>W{4IlA`9YW!MFX' );
define( 'NONCE_KEY',        '-%:ar LHVtj3H}:xN!:#MYbzKn0rrPpqU[3z0RI/BGKM3qPD3;)@Q*!_Dm@J:AhG' );
define( 'AUTH_SALT',        ')GmWfH=&`KFDmm.oXrMWHs`E90(/Loyl 5d-yr]M-+UJj:7bH-A9u!OCHop,<+qi' );
define( 'SECURE_AUTH_SALT', 'Z;Y]#XK>9]F]S{MJ+|LA2SRqG.+0V21a O$-L+y=YE+a:;&z+n tK `Es:;Nx{ t' );
define( 'LOGGED_IN_SALT',   'XNs^4)rvIk~Z0I@Mty&u4B!??yu[R9x5`gn%We.+HitML:nHu_%SSq4y6CnU s&/' );
define( 'NONCE_SALT',       '+oiB{%b!qZe|&O!Xs;Noc2A&{O](_~lMnv~snN`c9!N70jh3om$!)`Q$`QycTVd8' );

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
