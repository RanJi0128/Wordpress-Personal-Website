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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'martina' );

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
define( 'AUTH_KEY',         'Y^gymUI$k$)mgD)geuk]zo(1qpB[` 1yZ1Xc@9N2}x6j)gmKXL#6i.+@gHIWSn{n' );
define( 'SECURE_AUTH_KEY',  '&`Y=4>gty-d8=F$p[ !L{gXwH$g7/rvaJ/{$[;ycB0D!*;:0CHzJ)o)7Au mR*Li' );
define( 'LOGGED_IN_KEY',    '!x(bGQfoqRx5=,gmccOaP`6d1GWBiNIn o-(m|78}*m6^dV0?$|k1+C-`3CNB%y1' );
define( 'NONCE_KEY',        'h.aCCdi*@Ct(@>64BjlNH=yTd8p4rE&K }Ww[U+)Z|ODp~k7T+q1LP0z4f2KDXWb' );
define( 'AUTH_SALT',        'Vzg2CH2khyZbfh/dTZTK*=8QE9UcAW&-UGe&;G1,mQ-A#/ZGLHsf0=q$T~>2(,+O' );
define( 'SECURE_AUTH_SALT', 'w3(VFGav}*.5zh j?@:*t?_,E.st9uh?X$}H31?@[A?JX1<2+xA[@v(D/P-Z!jxm' );
define( 'LOGGED_IN_SALT',   'nn.;KyU>#$N%T9Lj:1BG|~qH-`F}oNGzKS Rw}q%1Z8QbS458^Lwew(.a[S%RGKZ' );
define( 'NONCE_SALT',       '4)+FZ:|B(V`O.b.Jm/B)_3X(H/Sx1m^2LBn5NCP@S}eV3`xFK=_Qv7sx|8<w24e>' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
