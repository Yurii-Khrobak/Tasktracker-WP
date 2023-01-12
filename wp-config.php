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
define( 'DB_USER', 'wp-user' );

/** Database password */
define( 'DB_PASSWORD', 'pass' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'bvI&Xbs:_o!,|a$|e6lctO;hR9q/7Ta.oB%L~dhmCLgz.c~iU/(3H0vPFJEz#KU6' );
define( 'SECURE_AUTH_KEY',  'X7&D`bEA2D@RE_Jbj6X7Mti;@{^3ac#>LC*N4`Q^^jy,]x WE&|hAVZqu>^-WRJy' );
define( 'LOGGED_IN_KEY',    '6]5Im8c*6Ff);vNQ)@(%+.D+h2U2.42w*Tt%{qY]AHE$BuBDGqof)uu+k}DUf-m ' );
define( 'NONCE_KEY',        ']C*CR0.LD:~q%yIC-J|I->]MSJrct}/=X-v?|A:]w||~%?iIMsU1g:T)a<s3f+T]' );
define( 'AUTH_SALT',        '!Nww~/TkeR(6Tk#UjTW`67e.;KzcGw^//Kjx>Y<HI[<Iplv,0S5:vl![,E :BP.I' );
define( 'SECURE_AUTH_SALT', 'wgs|vs5-<dm5BJ6_+K#MG#z) =fkBeuomBrxbT%;}![ioM*fr3]OX&L!>2#.or*e' );
define( 'LOGGED_IN_SALT',   '_F~XNy.v(,Xf,`yV)l05$Uir)TUD~F.F8Ha%v+dBE505JiM6#O<ITxUAV@vHB<Aq' );
define( 'NONCE_SALT',       'TS0?73[miT<qqvdh9:m)(S0#cVY_q|:-O{kI@58wUlSLxeO!WU07.7;^=FQdy`Jq' );

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
/*define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );*/

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
