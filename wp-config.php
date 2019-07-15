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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '=|AiGHZ,}LnO6X1V%a{/Yazd}8tv*Oh`-bU<$p:U;-82(:p 7B)iPZ~(@1UCAf$,' );
define( 'SECURE_AUTH_KEY',  'K~5w0<yhq+?[.!L^RLtY1G~3df  99y,2J2q-nhAZy~Z K@_VZYS7E nD[AEPN1Z' );
define( 'LOGGED_IN_KEY',    '8s?8%2s@%LuNX3Wtsf Jp.I_,L=`~OTYU7`c.=]S]~4XgmtrXeC5j)#nQa`>JqSB' );
define( 'NONCE_KEY',        'F9LodeM5lL0c_J)hAxa>s1Go~&*S/~][3frGzol.$Y9RhP&!v~komX7yhdsnnOn+' );
define( 'AUTH_SALT',        ');Hn9RR,Y/V3&{18TzaY+SzT;6@unhW_k44O6`:%L.)f*^ND(Vt1]Y3UX85l.w%I' );
define( 'SECURE_AUTH_SALT', 'gMyVv/=(:z9-dl x$AK }[TD<a>JW]*~a<wgtl|~R&JS>}4m^d>g)qTpODJW4/uj' );
define( 'LOGGED_IN_SALT',   'B9oSmKip,usr;E6 !o,*TFCGS1-{^DrF;JQ|XP=,C*yoF{]vV((<$Sxnm01M9[Ys' );
define( 'NONCE_SALT',       ' h/6//KtsRzHK*iG,6wt3l;w~ehV4|;U_ocj Ij6lU{{?tgoKrqN`>kc`D(QGnVw' );

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
