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
define( 'AUTH_KEY',         'BI%t8F{xE-w.!FRovE,>td@w,S`35|)$M+U)(nP9fU`+FxrPg%4-ry.SLwRO$R(f' );
define( 'SECURE_AUTH_KEY',  '7k(Q[OMr3TN `B`y?kpD/&gz(]GtmC{Eno#8kU| SP*Jftt8#2wXT?|]8+_IWFQy' );
define( 'LOGGED_IN_KEY',    'OXx^vpQQM3E^;@soEwVS]V%.utHzDn#sW_n.YZXFr_E<N=;T S!R?lMve0%kEs4+' );
define( 'NONCE_KEY',        '9!-1gHwtNmVAen;mK9TJA|i>V!7<S4fO^x=FQ3k6maqMn$G>KyRA55^tO+b6xN_r' );
define( 'AUTH_SALT',        '$B!ocwi5{}UG{LpT-DKgsaK.]>K8.W^:*fMzvD.]@0e]$zL @pfCgE.qJovN[j<=' );
define( 'SECURE_AUTH_SALT', 'Nf^9.Io#~x,Y?.[_f>Qk%el&U.a.U9mThA$,j@ibxrD]FPV8-R3{U%e*tzNox),N' );
define( 'LOGGED_IN_SALT',   'M5JKi!:GQ:JIuU?~H-Ee*tqC$U<RO}84&a*JxG$PwuOZu4ay`O$]2*tx,WV]QD{s' );
define( 'NONCE_SALT',       '2dSb>hG8aK+%qR]/= 4Q(dl}uW3ctAp?m0vQo#eB0EsFI$%>=LnT%,r)B0S/|v3L' );

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
