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
define( 'DB_NAME', 'gastritis' );

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
define( 'AUTH_KEY',         '%nO1ku2EksZ]:n,*7#8;g5 1KOjzRDH,QB}@U4R6WDK&udFtfe0inwp-q$Kk%J%P' );
define( 'SECURE_AUTH_KEY',  'Hk .km7Td#:{_;k.%Rgq$NclK6ceaJDap1[`j!o0#Qxk~/6;ZxCY-d9f,WcIR4K{' );
define( 'LOGGED_IN_KEY',    ' Y9$Lap2+U)}B<1 mOBzOF,F49.F`u5C!=$mB9&qM^uwi2}7/(~j nLU_`3tD]eU' );
define( 'NONCE_KEY',        'ERtn[sMm)`xt##d/e0Bm=2Qqj-wc_mQ/.g2iM?%%u%;J v:wdUHv<l!ERvP_K~|]' );
define( 'AUTH_SALT',        '(BEC( zkempzI;]OFD@Allt$,&KpD#jXH[MB)sT_y5BzR,]&)q/xF=okv<ldn0qc' );
define( 'SECURE_AUTH_SALT', 'A=FhG63^p N%*3B@Q+z@FXAAXW<W!Z.n/sQ/x*}f~*@zE=vwyP []$ZLP}zJqaW1' );
define( 'LOGGED_IN_SALT',   'w(j8<^:>(Jv0{SbU}_STA||/WlEVaKgBoa3oekI||]orImC$=Ygj2Iw{p,$C+b#@' );
define( 'NONCE_SALT',       'PK%=!VM1 xt(Y5RT2y)Ujho>j>[.ZPcKQoR[+R/Cp}p^@?Zq^`bHT{V:Z_WKnJY}' );

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
