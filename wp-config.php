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
define( 'DB_NAME', 'portfolioussef' );

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
define( 'AUTH_KEY',         'xK:6(v$de^17{j|sK!0+oo9^Ks|3!DjHgmFAf^v}8O0f?0@Q cGDm(AWN$wRes|v' );
define( 'SECURE_AUTH_KEY',  'j#z~O&:#!6Tk i(5%W6BSKINJ$pzHCIqfgEk}iG}cj*Sa0#bIS#c-oOC^ahNrDP ' );
define( 'LOGGED_IN_KEY',    'x&,$$j3-l54;UKgG82%V&W,i@%,0E(Ht8{uY1n$5 aoH~Geon/3Q3q;B9bbRYSS7' );
define( 'NONCE_KEY',        'D7Ri1!B9QG.mbS^-BZ[8<h4O`Ob.y;a}[KIKxaKMfR_t9/8xr1dp<RJ/J%W~D+uV' );
define( 'AUTH_SALT',        '9.ft.P:8u-c$.6c*{4@,^a,@G5+UqMdmppA{a8&:7,r]e?xvTu~wWs!d1`E,0F;k' );
define( 'SECURE_AUTH_SALT', 'Pk-}SS~fGe%k[x`Z=]qtGN)(cuXVqt$St}N8k@-RsU5[AXo`zJ,=2rd*g2sm+43:' );
define( 'LOGGED_IN_SALT',   'BQ|}gmIt80)|ZJ_doM,cd?H3^Qt/]h@r;`#ZP%u[bC(g}yeFkta&+512k/}_1b3_' );
define( 'NONCE_SALT',       '10:;}|05^E)n^_!KJXSk@2q%06c=ml%nrNSImy |1R XKiN,vakm<oY<ID($g.cw' );

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
