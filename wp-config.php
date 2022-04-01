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
define( 'DB_NAME', 'wishnwatch' );

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
define( 'AUTH_KEY',         'MVP3pQ%?%6kR%K:q@eY5UML9jCEqx$W?qlKsyJt%;MP%{2KC0>&v>malplgj|>u:' );
define( 'SECURE_AUTH_KEY',  '_$yZY&l @M=Hr(dD06wy(g|7zHfY5IZ#P:K&(ci?Y(ea>aasrFQ0u*Ov m6|H)=;' );
define( 'LOGGED_IN_KEY',    ';gXJG#%UK).W O>+A7HeAU6t<2A/H.NizvUq5[7/1:Kb?]4ztu5GV4`0[QDL-##$' );
define( 'NONCE_KEY',        '23LDkC{TTiusw+{gW}b22=(7%u}zn=-y)%`[D+n}Bi,b[LjR^]r2d(7rju7>ns+x' );
define( 'AUTH_SALT',        ';gspoohs zhHPL4Dj$BR_:-@Ru3}M_aTu0fb[,pQzwNUi6Nw+|{*mpI@YcBH*3L[' );
define( 'SECURE_AUTH_SALT', 'EjuBcP#`?ACH7edx,TVo Z.ehIt{]?7TI|8Cr._7ee@j6(PQcwNDQ 4#W+b`(#+i' );
define( 'LOGGED_IN_SALT',   'xFjV5Z3VS`o`Mr eNEZ=vik4[M8G[Ls@_x6H%cnMh]E+=(!*K*I0^&jEIF|GrTuD' );
define( 'NONCE_SALT',       'B2drqmnlrA31w=v8!vp]$SY,lt$>Q^nCGSR%;T7l 72nP9M@$jV+0_Aex8@[Egf7' );

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
