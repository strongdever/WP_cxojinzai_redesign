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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cxojinzai' );

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


define('WP_HOME', 'http://localhost/cxojinzai-wp');
define('WP_SITEURL', 'http://localhost/cxojinzai-wp');
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
define( 'AUTH_KEY',         'M{=K:^^`b!#VLkk }naa=FROS{r^,qHrtN?7)f.-^@C$cUZl{=o@%y@U!n+!2QrX' );
define( 'SECURE_AUTH_KEY',  '+nyX-7mT2t5kNdAjD[PL>-yr;_lYFRA_FB{N`~rR mXYuKpJT~SY=0|K_lBhrWKA' );
define( 'LOGGED_IN_KEY',    '4lx^%VB(Wy__;E]y$Y=jcBHSfK1EgK4BqP:di1QMfxSV:%f2 4!{s*Bh/]@?_O8b' );
define( 'NONCE_KEY',        '$jtQ2_[X3a)wVN648YM,GaSxO4w+&yWizbPG&IFzw~r.*^OS)oX/t!X}1cM::Hc{' );
define( 'AUTH_SALT',        'QdW!9{]4,9rHb:%d*zq`7;5BTWT<ck& 8nDXCK95ZB[^HWAX7u_u[c$4Kdf09;6A' );
define( 'SECURE_AUTH_SALT', 'pNadpw:G]LB&fD$0RkpF1=y`a*=&iF,a#.?Sj X)J<U.o1MR?G].dA)CI<xil?EP' );
define( 'LOGGED_IN_SALT',   'r!7JkARN00YEbSG@9JVUs,Qw_{H[7ft0QB$j-7vL=Qtl;d{T>lv EoDJ8nixH@59' );
define( 'NONCE_SALT',       ' R _iji+WbtQWx-K#q{{B2|dq!s@RJ?R;{1^!Uj&4lO$le.O)m`l{zd4ypoU%Q,/' );

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
