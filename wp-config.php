<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'Ahmed' );

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
define( 'AUTH_KEY',         '?u?fm{>jw5QE0G*X)rIqC3{7Px^lUyw_LQUs-^CuIR)r5d87u!.}`Ia?5l;v#C(~' );
define( 'SECURE_AUTH_KEY',  'd5n +TSKsq>R9jPU.vUNw$*8qmQ_itQTK_L FJz_>55Npm.{k&wcu>Xdx{_K4fa-' );
define( 'LOGGED_IN_KEY',    'p85av}=H[v{g{~$9u- 0%(R3?<pKVDR/PK~n(lue/wj`]?Ry3ek;#igr7%|kE@T4' );
define( 'NONCE_KEY',        'vNX90#sAt+:~!+8e:^ssHe]NOBzi<OCH8z%~*r.-vfknRcXbcnnOV#=_oL:ied_Q' );
define( 'AUTH_SALT',        'r:L>?V$fj#*PCm8WC[*2E1pU- Hxt96 hykdw3}uekeR[c]2/;lbtB w6^nXNMdp' );
define( 'SECURE_AUTH_SALT', '+?@_f kuT/}f8UoH+o(>fyOQm{3g*T84nv+v9EcUxX|tA!1kNtS{_s.1Xa.s}IG9' );
define( 'LOGGED_IN_SALT',   '<Whw5Q(/[]v0HMzKbFC%HLq5_:9m,W>R+W;z7vM),Ucm=$0.gNwGJv$6NB^a^t,(' );
define( 'NONCE_SALT',       'n=p!5_<u{njow:#dOe74;b7$8GII](FXwt;gL3+c^9)^3=0;,U=l!ou+H(&c6`s%' );

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
