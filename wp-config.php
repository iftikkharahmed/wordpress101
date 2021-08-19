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
define( 'DB_NAME', 'wp101' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'w8-k#B3cX3i*9vz#sU5`UHh>[WgL*)X}phQvs2N{hw:eG@`?B4QJq!+o]LltE)fp' );
define( 'SECURE_AUTH_KEY',  'Xx-hvgk6-sHXJ@vjhvPb$|z?18#6cKyPv`:r]p]JdAZo[<28|@-Tzav#(xV>i`p[' );
define( 'LOGGED_IN_KEY',    'K=& +hmLF+xu[8REzu[WQvamh_(n1(fB&}^Z}&cG%MBUA&Yg_Hme*<ctbK33XAm&' );
define( 'NONCE_KEY',        '}-W0q`%:P:)7,JgT@`a?UW[VGSHDd&|HKXmr4ME6Sh-<5UyPn[Vp?t|Eov/ X/HL' );
define( 'AUTH_SALT',        'ghTs=1h8h6;DUx#dbzX,KG.&Q;2ir}3dC5{PZ@JritN.5-zc)v6OM(,*}F@EI_Ta' );
define( 'SECURE_AUTH_SALT', 'X{QXl)m]LFlu^bkwz.Nn]C{|B~c tIZNQ#xI0SE`~7kd?k;eu}7.fXr3}aKfb?t9' );
define( 'LOGGED_IN_SALT',   'oeShK^tsn|l*c9E%cA!`$oS*rQKp9T:}65E>qakB<>Xn:dEt(T*%5 SNS}_Ec!<b' );
define( 'NONCE_SALT',       'a`.6S|!NH&u/YRlvix;MW{*y`RHVhbJi[[0zm7ERinexR80_Ee]^xD]KGa;t*3SC' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
