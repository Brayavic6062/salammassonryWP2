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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'salammassonrywp2_db' );

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
define( 'AUTH_KEY',         'TSjz A&]9q<BO@0)Ulx]bda[Huao_&sZr{Q}f?y*Ys5g!f0>8+LBn>_xU%+ + z<' );
define( 'SECURE_AUTH_KEY',  'lO}]sjXU^<a;v$ETpoz79bW:Wf [R4=R!F*h|M_odd:,5Gf~YVvM}K^&2Y`>{fBH' );
define( 'LOGGED_IN_KEY',    'z>RDJOTu2)5fu`8eoL*R7}cr;bD68sKuG1q<>50ljU[$y2&SyT7Abg_AFON2}0BU' );
define( 'NONCE_KEY',        'p~]CE<A!,I%gP3./8gMvnz_KFxccRvw$xZnSX8+,vc$=,m.o<wwkNmLSE*x3k9?I' );
define( 'AUTH_SALT',        '$5H3Lh>]K, IO1Y,da<3ea|RSe0z{D>0aNT 98>/,)?*CjCa%/sO3E{-n4%8hoZ5' );
define( 'SECURE_AUTH_SALT', 'rwmdr~G^bLI9?C4t{g,AEpSXxRx~LT1BZm+)elt2VaJK+l#eXE;rh_N}pdQz!nxn' );
define( 'LOGGED_IN_SALT',   'q&rRa#Lw.L#T0z=`BK9_:gS39Lw4vi[6j9@oOhtW-]PX3&Aii4VT>S%&~O(!>lH$' );
define( 'NONCE_SALT',       '^.4:h0UF!Bb/FZo2[Q AhUAj^1m?V>&pivbybLk_/7hdus6.ar9;Bk$Zb3!fj{XQ' );

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
