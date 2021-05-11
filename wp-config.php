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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pruebaasogra' );

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
define( 'AUTH_KEY',         '0vJ)}t<kc+QS^Pp(P{~rh:?<L4N#~9r^6qm2GdAL~O+#Ze-?v#2w/_=gTQ-J)uol' );
define( 'SECURE_AUTH_KEY',  '[V7wICD3b.s$cbew3eZ#P}9~!,CiWslymu!c5KsC>;~p#,peD-JRH:p3+[pfE)VW' );
define( 'LOGGED_IN_KEY',    '*^r{U?7O??#H:OF1^;GtivR+~trRSv3[nqKM-H$3 U.5]DH[Dv6UbfUd;h#`<8)B' );
define( 'NONCE_KEY',        'tySj|/cog9@tuPB Mi0c[Nl]1%#+%$z@[&HkTM`=Zu]KaFE%_7a5Def,Nqt~_,N%' );
define( 'AUTH_SALT',        'm>,W(zJ-l<{v3xG)tz2n^vdK1JY9%I,VqID+;Tu,Qqa9f@=+vF3w,keIZccoVdy@' );
define( 'SECURE_AUTH_SALT', '~DxaAvbpPLM19{=!hD!btie+j`t9s!p*BbMsPHVzin7Es[4!R%kfZ15~1N{#9^U4' );
define( 'LOGGED_IN_SALT',   'UyCqf6qO=TK)HMdPn~2E^wLQchcc`--5^7@?YR&bltGHHk7qpp?F_|!B9RkV[fwq' );
define( 'NONCE_SALT',       'y(A{52y&)6dXE?mVvnoVW$<W;:R2PpA:)WZ^d_?#i=+]eRe-@vvjS4JsM/Bbyt2:' );

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
