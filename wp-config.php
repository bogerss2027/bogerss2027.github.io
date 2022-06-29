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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         '/%jSTEpn#D]#o#So)1gCS{b=xauJ+Yk-E(m2<TNRr[].7[e:k8pgkj7O)Rciq+)7' );
define( 'SECURE_AUTH_KEY',  'dK]qV_u`yP`;0Qbxq^v[[A^h:A:f+Z?Gv|_z3L6:,YC~Z}8,i4D6ETby10)C)*0`' );
define( 'LOGGED_IN_KEY',    'Iyj g{Q/z^oHhwT4]x8T[k;(&62g1-u^D.(|3R(kE@&Jt[h7wXJ@;xgJo2-zZ!Rc' );
define( 'NONCE_KEY',        'Bz(|zx<-S`[LreeAo5w~iMz[dNNa2+9ko8] e+^A@W<S`.L#+|g@d%5`AvH3u(Di' );
define( 'AUTH_SALT',        'GATBE+U5RbmYeN}<f<ko|eS5l;)SO-.S1oJS3@n3P1J~ba-][7dor(W.7C$!k=K ' );
define( 'SECURE_AUTH_SALT', 'P$_FM?h2LfU.#7#]LFlDW~}WlhjUoL#^6BC[H%}LPm2l6km8:Kim5VA]t?<?=^c|' );
define( 'LOGGED_IN_SALT',   'hJVB)#2;V%mVN1IM(iG@3iZH?]n.ZAm,lK{)a%o#B6bG#mLvQ)U@Oe8:K,0HJ,;N' );
define( 'NONCE_SALT',       'Z8@M[t,c<9t2|!R:&D@jz:9ng>x[3sMoL8nlm{iCmSc(:8b*)H6c1Ng=McHI2= W' );

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

define('JWT_AUTH_SECRET_KEY', 'contraseña');
define( 'JETPACK_DEV_DEBUG', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
