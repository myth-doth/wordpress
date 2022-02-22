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
define( 'DB_NAME', 'ecom_store' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_HOME', 'http://localhost:8010' );
define( 'WP_SITEURL', 'http://localhost:8010' );
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
define( 'AUTH_KEY',         'E9QGe>O41_|O1_=c1}2;_/1x}}XcPrc5[%D9 ]lH3HH=]U?5r%MrB3H/!(Ek&%JB' );
define( 'SECURE_AUTH_KEY',  '9[(}D#.sQul%5ueqqJgu;70{swxD,W/Otj?fyZv^nvm&oaBL*_2gGN]d}]g?yoS>' );
define( 'LOGGED_IN_KEY',    'k?EQ#=QM# K`Vt?fsN]vuY(h`9BwqU@sq!b{0H_DM5#fChzVOJE9S>Y%/U-]yA/_' );
define( 'NONCE_KEY',        '/eCD&;HZf)S0M53c:DNq@?][/7[CF)^VqOC]tylX?*QWh{>R5Ie]KrDm1BbR~Fix' );
define( 'AUTH_SALT',        'BE}e$&J2<rkc30i>eA7>z>QWM }4.v|vwM$$= a%U<N|8$3173U,_vsM}J?DIGFC' );
define( 'SECURE_AUTH_SALT', 'x+HHby?T%}T$o_~2X7M(*bzqikI8$ws` y04wVw(6iD&iXK?k]n)Vb3Os2kH>%*@' );
define( 'LOGGED_IN_SALT',   '[ A?033xtyBF]YkOySkZgM8m^r&{%tER,.#)wDLct6@_8@BU0y#x4*5U`$@m;(q]' );
define( 'NONCE_SALT',       '0RE7SI+9M@$+ZB]oH,40c}_VLC]hxe(3Z6Y,z@4Qn *|p&m^ Ia!WSBzC/[X#ol9' );

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
