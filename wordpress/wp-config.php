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

define('WP_MEMORY_LIMIT', '128M');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qVG=) oB_%B^ X$NI`t6yQNj;[d];J2~-1imM>rr4<#i$h])iJ0jr1U!s2JZ&2X:');
define('SECURE_AUTH_KEY',  '$>@{4fclIVbpW8<I!Y)N|c?ot&D/@+=($|LPEXh,AkjL}AMgcFhcT<`PsQ;_1o]e');
define('LOGGED_IN_KEY',    '[Q9pzvr(8DkTq.}udLR=^Zyut,ABctC9(rWE#;F>9tM7S@Kfn]yEphp`+1CgP:>D');
define('NONCE_KEY',        '](z;c?Xu:wvaO|),|o[^}#hmU:+xqa`k+>eY&.;11Qa,rC#1Ny@O77d90{}`(4`:');
define('AUTH_SALT',        '#V R*F(V`Z +*? Hsyejwog1/8D H::k018OLu8GV}k `irHBDC ^jMS,C<9RuaO');
define('SECURE_AUTH_SALT', '>@-~V.;G?J:JOmhrOcDM4foWyNLuesT(B7$oU9WR |yShB!mUz0Q<i(Wb9LFG,a#');
define('LOGGED_IN_SALT',   'ASg.vBN2-V/`*{/u CckMLjgUqe!4YXQpA-X&9|JdNq. rLl~+N0h<NbSCtU.DBI');
define('NONCE_SALT',       'M}8IF]X;tbyh-|EwFhGn*8.W$JQL1/TMGZx6MpI,SO#vnX!0FB19hE@| bxGfB:e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

define('WP_MEMORY_LIMIT', '128M');
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

if ( !defined(‘WP_MEMORY_LIMIT’) ) {
if( is_multisite() ) {
define(‘WP_MEMORY_LIMIT’, ’64M’);
} else {
define(‘WP_MEMORY_LIMIT’, ’40M’);
}
}

if ( ! defined( ‘WP_MAX_MEMORY_LIMIT’ ) ) {
define( ‘WP_MAX_MEMORY_LIMIT’, ‘256M’ );
}