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
define( 'AUTH_KEY',          'u.P4q{8 E=YYUmrUF.WrB1=P/.4t%o?c(,p,eGXl[6_+Yu#OBh~u=W2cRUtP$0m ' );
define( 'SECURE_AUTH_KEY',   '^/HIy,ms/[)NS@vd.z9U0]?(Ha~,Z4%nQ/&iQ4jJljfGB+ zO/*Ry{jUfM`/2G6M' );
define( 'LOGGED_IN_KEY',     'qRmiK:l30A$6i1gl3H|*M:)#`h;,|^Io=T/h|e?3Q$D4.zK~/q[uy1eFD1WQBV-X' );
define( 'NONCE_KEY',         ' af:T%{x#_ $}8W2=X}kI.SDa7Vy^!52/$Lduf[j)9Er~3+K G`:Tl!IZpF:J}Hc' );
define( 'AUTH_SALT',         'hhJ]4Kj~gDEo(nu+s2ou_Qx3EMIWx#;GFwg#0cZ=vHWmsO`:-g;VAWkN_2:]JHLT' );
define( 'SECURE_AUTH_SALT',  'lvlsp+_3$K+;U9Zidtfv5yZe]O}(9LM.uK1JCYkS-i_{5L=W]vhxCd:Q|Pl$TZ0a' );
define( 'LOGGED_IN_SALT',    '02-8u/X?G=rIA8+%Au7_LIA6NLuRt-szO$`^t/]=>/!Q]%(M.8pB`w?9dPa3s;r!' );
define( 'NONCE_SALT',        'v-vY)!K#LsOi@PM{9=U<xc)aQHEtCU%h< [s4l8}{Rlc`^ji$TO9]Lf4`6Y@hMa>' );
define( 'WP_CACHE_KEY_SALT', 't<hqpG3LssqANK_0W;VrH:L$jyNYFV1BCVvp?_`FUo!q^i}1&nBug(VaL:wNpO``' );


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
