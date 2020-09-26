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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'donjoaquindb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Nylk9^Wz6Lp.uc#6}c^]J;Gmd39)JRe:rqT#NdVX}iP1?5352n#lzCy=IC3?aL y' );
define( 'SECURE_AUTH_KEY',  '0 D+>ZjTtNU_,d/5gdz]Vfc<h))I=hc_}[2nVY.@X)<FW3!Z#BwM1(Tlwt$7ub87' );
define( 'LOGGED_IN_KEY',    'lEWYLh5i$lsJJ_Mxzqk_<RdvqH;Uygf]=rihE#/6 (38wHjZ|]reel{}_xJt<nIl' );
define( 'NONCE_KEY',        'XT/_XB@!/guDh<]d~Sv&s_AL@zWPzRUY/Pq#*lej*J/6`;2[^7=@JOt2{=dL32VU' );
define( 'AUTH_SALT',        'A$VW1Z,K#zS=<@Mz:A~{=&};Cxi:||6c(|W!m.|] 5Z=u!6}/FF0/idqVg4Fz*Eo' );
define( 'SECURE_AUTH_SALT', '2No?O@.=a|7(=7)g 19Wo=.wl1(#{E$+tF Mv!(IINTkQ-X#$*/*BI/N- ^GJLEV' );
define( 'LOGGED_IN_SALT',   '|{olpR)0(*DE;&ilC`lLIWHIer5<R+W&}~_KI*c3(STIa1v8b@G=an%jL9e;uDPB' );
define( 'NONCE_SALT',       '954Q_YeB&f6H@+qFD8fJO=8+-2luvQTWmk{zx6@r2o=XpRj:;qOv%drE1>.>!d$!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dj_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
