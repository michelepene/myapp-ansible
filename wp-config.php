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
define( 'DB_NAME', "{{ db_name }}" );

/** Database username */
define( 'DB_USER', "{{ db_user }}" );

/** Database password */
define( 'DB_PASSWORD', "{{ db_password }}" );

/** Database hostname */
define( 'DB_HOST', "{{ db_host }}" );

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
define( 'AUTH_KEY',         '.d2GE>iv-1E6C-Vk0j`9Xv1Kc1ub<Q{;WfROa&K<G#I/-pssJymd*]+k2ym6?i|^' );
define( 'SECURE_AUTH_KEY',  '.ibV.0TZ_&nY$Vd|miJ@lsIBkV:|h&fVdhpCc4e?/fs|tqCQanf<qi4Nug589cI(' );
define( 'LOGGED_IN_KEY',    'c.S#sZ[6blAJWi(S|8}&uAQyCF*{homriu5UO1dBPb2&@1mwz{d0PUV!.f2+5M0A' );
define( 'NONCE_KEY',        'R ;Ye)GK.pEGRp,dI4[(({gHSC$;wBx(wm.>PrCf6IQqm49q#4~73s90coy,cHi[' );
define( 'AUTH_SALT',        'rwJ;5>n|L)U8lWLZlBo&!@,Elw8;JKLz*8I1sD;b5~{h(0ooY}y}tu#3af|p&<gB' );
define( 'SECURE_AUTH_SALT', 'Vk;Db+Mwdf>-t6%zQm]zUZAurLJ*5s|oKN})t4KccQ3 &Dq=</`_/,NLT)`G-#oS' );
define( 'LOGGED_IN_SALT',   '@;jxpTB!yW2>`~qC@rNro/G7PKR,-9vjQX0C>[ {@u0{&U7ZV;roygDi9#W}yvJ#' );
define( 'NONCE_SALT',       'XcpDg>j?_d8<99eTJhDMK=JIiO~AmJ+g$4W@<+5*I(;*Sh@;WLbb2%i-Kce~[4A2' );

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
