<?php
define('WP_AUTO_UPDATE_CORE', 'minor');
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
define( 'DB_NAME', 'motalk' );

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
define( 'AUTH_KEY',         '5Z)ki7@(gcd?lL.vZ8.YpF $Z$F<kt`lbS;.>nq=X& +q9=8KA4IzBOsw%7_l]33' );
define( 'SECURE_AUTH_KEY',  'X!{HJ<1)#UgP4UBtRP{;Q1Zw1-XatE4U&o7-tdG5hqp>ds|DiZ`-U3F%t[eo5*Oa' );
define( 'LOGGED_IN_KEY',    '=o-p,>EtT<!C6388u=%?XO.Y;(-Ta%v6Z)<?1_^R13hw9p$e5_a@I%2(]1>uK9if' );
define( 'NONCE_KEY',        'n7+Z2s|.ROD+ YbC4C~KlAKQ%Kinf^]/l|&!2x9eWIh%XmM)iWvT8~:S !|xov3]' );
define( 'AUTH_SALT',        'Q(4Gd]JYsv>nhXxQI*mV|_GICMeB7y#8(RX$Xp[fd~{-T}T1.y1XP%|7Kq<t(q!e' );
define( 'SECURE_AUTH_SALT', '$l!N3Pp7t9VslApe:HDW(m0[gNW?~1b^I&zR[y(hE:VjoGef1zF (|xy+:@)z@=A' );
define( 'LOGGED_IN_SALT',   'RP)>I=#$JB+pu/aO3}wvF]qu>k?m ;[wCJ!=p:CuMq+N4Fv` Z$E1] r,O,%qVkW' );
define( 'NONCE_SALT',       'u.oYQ8kd+lh]aYA<^JYaprHy)d_%F(A8iDt[TGi3}zROItY;QFaOV>h0=/V1bL*(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mo_';

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
