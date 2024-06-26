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
define( 'DB_NAME', 'unique-creation' );

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
define( 'AUTH_KEY',         'p;aQ<KEtY]79.Q<DAaG]fAaeghP$@n~&o~<rbSHPPCy^x4w<,MMub&<:JJ#JwB^]' );
define( 'SECURE_AUTH_KEY',  '>qtmDtoQ`hnP3A6GG{/`(([0OD YL3R]B8Ud>Qc;^D9`inKe7bkZ[O@pJ<9dtu(G' );
define( 'LOGGED_IN_KEY',    'kfzvUL9)A[(~gZ]6aq>Q&FM_k|0D{*=EV?iFBxSz!S.X fvzAog:_V9UH/4g{sm&' );
define( 'NONCE_KEY',        ':+C([1j%+rF|]F7)|mfaLzdU[q0x3,BTzj<(X?4dw_bmfeF_~CrY<zP3tF+4A$*L' );
define( 'AUTH_SALT',        'hasZUAxWlMuk5Veql}!Hbc:8vM)3Ci;U(uxB6X&kjSj:3Ewec_!mH63BdwH82dL*' );
define( 'SECURE_AUTH_SALT', '3RH#^CjD L%wusRiTfE%Zc`s^S(.gY|s_0m&V*[PLx_^`+dtnyi0B%2-oWz5@{,J' );
define( 'LOGGED_IN_SALT',   'H$vp30l![]yFBAaYlsu#`j;TxBzPnx=rNzAQ-1&:jterqCX[&lU!9A<&f2+j:QN~' );
define( 'NONCE_SALT',       '4f(=qS[%4BskT;1ej;I?V8%8uLuZeScF2K&E[b6`D_y}Qlw8[A?N;`)dL8Z[7Ca|' );

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
