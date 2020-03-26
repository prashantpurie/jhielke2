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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jhielke-1' );

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
define( 'AUTH_KEY',         'yyl=e&+G0(^@WgQH/ryZ1U/gT1=<hEs%G yW3%.^r99Q~5wl~8ll3<LSW?iX$e@,' );
define( 'SECURE_AUTH_KEY',  'it>PR3+{mFszr)sj>nGI&q1f6[+%gC396NxqLI,^1oA@:miN@bs6B->O>1bd@LW ' );
define( 'LOGGED_IN_KEY',    'xhNngjbU|0x+8k{r9#&$-=DPxyx+y9 &J2r<esu}:fL*R1}+`6{ACKCr=aq!#d-I' );
define( 'NONCE_KEY',        'vi-I]m^opt|evL2n!Zq|y06/uTsd*@/@dYO!h`#4}%XRKao|#S)_2R,W/%3Gc3% ' );
define( 'AUTH_SALT',        '45<-v=Ftfn^L7CH;6xY+W]ZDr`8DoU]^):X`4}DoA1V#L8QOa>N Hl$~6:er}-.8' );
define( 'SECURE_AUTH_SALT', ',_.ZH-:TV?9H>.kk&*2<m/y$lc)2a`.K!jPVRWv[[eG^#VLKD<St2^uz;}}@L`3^' );
define( 'LOGGED_IN_SALT',   'hGy8j[BVflgGrU<Cr~ v&Gco89p&Y<[>xYDTLwQJ6egVM%d<thDVg<cDTD97IUi.' );
define( 'NONCE_SALT',       '/z+,d]yPXZ~X2Yi{#C&*&D*$ppwPmD+k/jB1d}Kk4A$K*P9%18>q(2sw_L&:H!@}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jhielke_';
@ini_set('upload_max_size' , '256M' );

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
