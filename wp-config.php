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
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         'od Il|OAL:]`/9*D3+jI~rSA]H;f23+@Ek?3GMuU-~J;OvsSO.jgsr820[_<Tw#3' );
define( 'SECURE_AUTH_KEY',  '^:9F6d?lbJcU4M[w*PvOY@PO8gsfPexB#oKt|sRvH,%#s*BI4WlrZ>Gnf >mT~t)' );
define( 'LOGGED_IN_KEY',    'pYgW05zJ.NF$GIBYaw!rtDISA?>iXs|#Vn=c{J`pt0Q_#lYnMC|[ PUuVNpVj$4C' );
define( 'NONCE_KEY',        'mQ/1:9E:,jEO!~@%ooISU*JwCDQ#IOnuiwPFGxt-+Ls#Yq>Q|(wICu~~[D<i2^W;' );
define( 'AUTH_SALT',        '*l.J1>z.2LHjZBb@9YP>.$@fLy50;@0h(%!?yHPQ=C,.cQw)KJ5fe.DLn-I1pVh3' );
define( 'SECURE_AUTH_SALT', 'i6.4jRFY7[=>kp=TH!wV(el>]fgSz/g798] dQz~9x;^Jc]:~PM}&wShfeLC?ZlS' );
define( 'LOGGED_IN_SALT',   'EfoN]AgjiM&`iah9L-+,vo!p<qqN!f&~>-S&sRc|WrR>xYSv0;ldB`iGXly>SdWW' );
define( 'NONCE_SALT',       ' myGU^D,i<:-;H>Vk1[S8Kh,iNZ72PJ5;<DVUATag~=6r ALksfJu~Dw[+<4>X{f' );

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
