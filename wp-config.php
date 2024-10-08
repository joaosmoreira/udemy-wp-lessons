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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'H:XA,)azvFC:Q<Ww_}&?&/Skh<=Ul,$2Mu8{#j9$rEZ7ghp)>g^Tn^sG.nNy-r4]' );
define( 'SECURE_AUTH_KEY',   '5f]`f1%x/Hxmip!<?G1eTm @HRX/FRva{oSYBNr*ae+Ot0yYhOt9<}^SMt}#sU9|' );
define( 'LOGGED_IN_KEY',     '{+ZM7kIER`2E*2JS=t9oxWN].Ma_dd>^xnT=^=]>cbp}83?T0E`R;(Nc@6XQCD27' );
define( 'NONCE_KEY',         'V^  `m2Ws.%(7d_!HcJPIP>>uMG5;_j*.t]1t9aZ wBuRSxGij: 7e3;nkzAA$(o' );
define( 'AUTH_SALT',         '_%`ji]b_BDKKO-?{tUamREmng,:SXC6fxi.h]l}r.+F.p/#^c6.315p.t;*ip h{' );
define( 'SECURE_AUTH_SALT',  '.l2+sb`?<3y!>~X.B.avTi5%dfsV/t4%r!?^<;PT}-M;Tu71jyiBHexg#UFPq k*' );
define( 'LOGGED_IN_SALT',    '1!*up!U]K`et-o%[Zm:JtN#Bwoj7PaZ*Fw(ea-1PLm>)R(?rul*tuA.XI<oJCJr@' );
define( 'NONCE_SALT',        '#~9;Td.!rh~f]*AvPk!bl+b$k;y9gYF%|OnOtnBJA)@`ysJ_J==,C|u>Ml@xlutR' );
define( 'WP_CACHE_KEY_SALT', 'AqeEqC($vmX5;:(.4&VOqQJ5uA,JU:C$^5KE4@~=nkYp2?ITOyx|&j)zOsK9t>My' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

/**
 * Added manually.
 * 
 * Enable WP_DISABLE_FATAL_ERROR_HANDLER to log all errors to a file.
 */
define ( 'WP_DISABLE_FATAL_ERROR_HANDLER',  true );


define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
