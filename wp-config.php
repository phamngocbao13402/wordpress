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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo_wordpress' );

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
define( 'AUTH_KEY',         '(44$JU4l_}[BRR~l&YLq&D.m~wr~,{@~A323a;DtSxoAHEOaAm:GU8{1BFM>|O=V' );
define( 'SECURE_AUTH_KEY',  'PnL+,8)M1w,yA[*,^GocWNPZ4V%ufIcrH%4)c13dJ[^[oap* VjSn-C,3P$_oKBC' );
define( 'LOGGED_IN_KEY',    'G<ssz+<}B3wk%~y7KJ`]b0s$w3!1_JBPQTo?1m(cbj/POFM5CDe9&d^7CR^LYZZN' );
define( 'NONCE_KEY',        '-PM8[bp*0A5cj4rbD)50~TahR9XPOw3:Q$Z& xoD Klytzox2,Y4a]kms1d2].(Y' );
define( 'AUTH_SALT',        '0EChcH Sy%~YcVuvZ#=2NWub:lsQs`iJUB-A8S^4@qqn6)`qL!FU$Wb1Hvby7n4o' );
define( 'SECURE_AUTH_SALT', '0ilX9MJT+ `V~4g3vW/aKoE.X3NRNN6WOcg:cf<,Pz6LJ9l-Oc:|:,D^MtKOQF9z' );
define( 'LOGGED_IN_SALT',   '|tzU%~S:rM++P--5FWx3yx8!N{Y)Dr5X,tb1KJ@Jvt8pH(4JBnyNBgW]Y)l9<X8{' );
define( 'NONCE_SALT',       '}>=I3?zJwCJ:mq#hU<9|l7~JQOF/(DN4vSW!|K19gg:+Jd7e]zyY<U[;Sxm2mI(2' );

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
