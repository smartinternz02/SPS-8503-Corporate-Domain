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
define( 'DB_NAME', 'semantics' );

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
define( 'AUTH_KEY',         'p+^ldt{e&s8U;f+o9v#U^=AKR5kl5EbXXBe$u=&!&glbc[CzhB;dqhUjC0jF~lUZ' );
define( 'SECURE_AUTH_KEY',  'xM=(=su7[1:*s}95&Ebts5J/]@8~HDm_]!2}q,~r~PAyXjq:J2+^?@3`RhYDde|f' );
define( 'LOGGED_IN_KEY',    '`Din6a0g,:`]B@]xt~GeM8Q-l63JU1j_sU$>`,u5#{@tEu[U{LV_=X=W*b/ VzUz' );
define( 'NONCE_KEY',        '5XexQ`/>vqDzW6JwHT/>pX6-9|M(|<T*<+Ke(S6gp||8SQ~J;kWHL$P!WV}|uV!>' );
define( 'AUTH_SALT',        '}+D~qeRJ`rHFc}*VN)^og1[a{G{Wdpv+jSAzFER9V4AA~y>t!51$2sNoe8_c&sQ&' );
define( 'SECURE_AUTH_SALT', '^Xa)ZSi@A:VOTq70[8|,bJXf?:1np>[8*eB_n`Qcu}ZpkN>%4LwDNr.bIU_luT,4' );
define( 'LOGGED_IN_SALT',   'oUC3+<w3]A]xW22Y`}I*dFx%C81Vcq~%20R(Dxi^a%$-<8sClrmH25ats1O@G[Mc' );
define( 'NONCE_SALT',       '(p!WB+Pq45=_AEx@7MK87^=omEAc7t{]~eMNa3^_<whUQTS#CK4#n-wyZyA5AX%l' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
