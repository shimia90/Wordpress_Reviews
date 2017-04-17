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
define('DB_NAME', 'wordpress4');

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
define('AUTH_KEY',         ')_#f8m[%b=_1J!,&@[@b:/z&w!:`@c?)ELc^YV+!}M`WYb<koaRm.[x~?vm|P;I7');
define('SECURE_AUTH_KEY',  ']O I<o?uyx2kCYPnL5_>]Ckjwp*vST}G?WB9mX%+hC0#yN n5%GC *f92LKF{tzX');
define('LOGGED_IN_KEY',    '9G!!_czlae9T4AIHas|FZ]^w&A0TeP:+4]kUaYAm`uC(d]xA<tHk<%jfqs*GWsun');
define('NONCE_KEY',        'St]VF/jy5Q[JJLWeh*(Mw[)mQ^r?P=#Ikr@8@{SF ?L:eU^8{T`*~g^(/3{rGC,1');
define('AUTH_SALT',        'i[{^)Ixp9P(%Ub.0%gj;&nd6mvio%!QN)7)`xBT#vD&j*R;i8J1l,TE{4yU#9Gg;');
define('SECURE_AUTH_SALT', 'wRmo|OaUJ%ucSjP1C$?f;Zo,:VGD9tO)K(2I3KjjTq/LI&XB!#v^?oI(qH~>_aPf');
define('LOGGED_IN_SALT',   '8L#i}c]%L~ofD^giBSPAZZQs3LAS#wU@2E*BF_K`r=g6ThqXxa8S;n(uh*wl$.uu');
define('NONCE_SALT',       '-%J?JJQpLh=9VM Ln|-b7@Ird9gp#*.EwiCUNy# >{RXcYt/FZ*nAl[6Rry~[c+j');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp4_';

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
define('WP_DEBUG', false);
include_once 'new-config.php';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
