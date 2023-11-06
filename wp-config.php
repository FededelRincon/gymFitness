<?php
define( 'FS_METHOD', 'direct' );
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
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         'YJiL<NHQx=SbNu hpat(`qKn#Qj92uj@<wIzpNqJX#]~8nny:-={PI9 `|PX8y|y' );
define( 'SECURE_AUTH_KEY',  'TOc%b9k=:VrEJ zb$J PKCQTZ@F}y#JIK[hL)8eziSwZTES}9EnSwF^e-N,q6KlN' );
define( 'LOGGED_IN_KEY',    'U{vTp]~TrIQ#oen8CA8J-MI+-spldx>S*m=VuB6zMtCsqW<:SYwrxS!?S[g@&Bxc' );
define( 'NONCE_KEY',        'NzT#cWW-8I@WU-d9:YT4rC$GNTW7oliF2eKuK}R%yA|L/pt.l[gpu?SI|teHdSnp' );
define( 'AUTH_SALT',        ' o|~TOL|@@LY`B{8fr#<Od}9~hwipY7@pT(UmSfif:6k,&JF1QWg)5EP0CC}+1 s' );
define( 'SECURE_AUTH_SALT', 'qmwp|3eyu5B^k6uyR2E5yAsjy1c;iB*-Do4he-z}=2+O_}^s>lv;&}1+9GD{WE!&' );
define( 'LOGGED_IN_SALT',   'i;(vuqjR*hZ,}7S7^yH<`AFAHml;C+-Ny[%%3xiTx;hK8$Eb81a`?k@Ospv#2DCF' );
define( 'NONCE_SALT',       'Vr}]z+fmWQIGIZW/D;A|PQ1A:<MUGS?F(f.,&|nxMO|lJM}!}xb(Q}Y^paS_<#7=' );

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
