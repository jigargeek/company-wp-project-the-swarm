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
define( 'AUTH_KEY',          'hh.dmx7;Jl-T$ZD1T;m^k/)9_8CIK^+v;~/`FQ;K?5h(zKL{hXk^-X0pJ^9//HC9' );
define( 'SECURE_AUTH_KEY',   'y+4i6)pmn~_?;f.cw9y5R_2]hv@s!rOlG%8<4DI:1^>xfG| TEGh@2xm%eHt:(9<' );
define( 'LOGGED_IN_KEY',     'R#Sdh[}FhmF,zB[^:Y6BPV xyN(R@B%R$gq(Ihf#X8X(0Ew+M]!*[Uz~])){O~lP' );
define( 'NONCE_KEY',         '4 VSs_VC2l@)n3E@q@k(tk ,n=eeo-Yk79!:q~*5Mw|*Z0QhF#[a&r,`E=1h_IhK' );
define( 'AUTH_SALT',         'I6^Ol>Hqn4jrcha0OvF)+IC/S&{E!!{3lr,<3p<l-,#[n4*m4wuu;A/0azZM7%i2' );
define( 'SECURE_AUTH_SALT',  'o)epl9z@xG7o6Hr<jkyAJAZjWn5U(*;1!q VfFOh[104$17|C;W^/-b$wbv-6s8_' );
define( 'LOGGED_IN_SALT',    'ukxGBUCj,o=$]c_BJDg212WLH@zFD4#y<ZF~BG*NzWu:4x*%.~pSv*~lM[qTVii&' );
define( 'NONCE_SALT',        'X]vS$Q_v_iAr5QEc6Ia0BtxO-&5):bl/jUF*!+.(ZH343RkeB`)93+cm&Zl;@?HV' );
define( 'WP_CACHE_KEY_SALT', 'su][rZF`Y^bt8hdb&wr%/F509z[fKI%kAV|yPh}gEkbc&wR^xr<_/E6WM0t{~R[u' );


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
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
