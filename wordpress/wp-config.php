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
define( 'DB_NAME', 'mvh' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WPCF7_AUTOP', false );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Js9O[Xrv-E&i1K~La<WqCwoQ@rDp^d7Z(Y7 Q ~4uXj<gC{G2KEBA{BcXM1_)2<V' );
define( 'SECURE_AUTH_KEY',  'f~Q8$i (3yyrFmaz4WQ?)%pBs5&t{XE8a9CP}b$B)4F<EJ-Q/uiI$m5lHCGEN9B|' );
define( 'LOGGED_IN_KEY',    'tXATNx<W$0&A{^^$,*!YF_3}$V]Ae}6K&6dmm$<]fwGgiX5;p{g*^<w07Co($>yP' );
define( 'NONCE_KEY',        '|#+!Hc(s+;TgOn,~x;BnPa J)M);mu`1!wTc;x@zvB_e-tC{M;FK:r/^!!Z&>_QT' );
define( 'AUTH_SALT',        '2Uw,`?n5%7QaEOQGUSeIiJ[DpSv3h-7>E~m3FIS%l<;/rX`;BxG.;_9fdP8kQ&;`' );
define( 'SECURE_AUTH_SALT', 'c~{.6 {:~AF[:l-tdq$0bq.JO@NI,1+SDUaYKG{5Dd-Nn!XLOcu)fN-)=!YM(d4 ' );
define( 'LOGGED_IN_SALT',   '%.RL3%4.EJueXdU&SX?o;~xzGWmb*m7Gbe(Z8jbDso0#JEh:r~LWr}`uEWl4(_[]' );
define( 'NONCE_SALT',       'f2Lv/2#1&m$5|{2Vzt[^yKW.(GObG0KinhpB7;^nC}XTuO>CpWB;&=<a!O-RFOG9' );

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
