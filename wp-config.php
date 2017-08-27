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
define('DB_NAME', 'youtubeWP');

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
define('AUTH_KEY',         'x8Y]UP7?0w;vg42dnd#LqM]tV.sgHPu?kvGlz YkcVa|pj)fU`qqCrVVEiVyK:h`');
define('SECURE_AUTH_KEY',  's2aopGbo((<d)PO%wOMx3HDf&NXDVYu|w2lTf:?/nW*|P#9O]f?wD(`me;=!`pWo');
define('LOGGED_IN_KEY',    'U*u4Q8^Sgrnf*0+Sm${l3./,:k%n9Q?XsR/<gR2uTl9 LQWnoxB@+a(JYg(9c!ZS');
define('NONCE_KEY',        '0BS[nGr_S-h#BwsucD^k-?/ljVEc>pQ}/1BC~1fxadZcX/&CMJOufF{yU5I7?/RR');
define('AUTH_SALT',        '+>6. dst:NzL/:HOb#<R&nJp1@U|/@{L;MiQM:(=UI~0V]p$z 71]IS{pnRc1A}_');
define('SECURE_AUTH_SALT', 'EtpU|{ydPWU-3MXO*eM5mH!Pa_]FP%R|F-_;K3JH=oT*C#Jyxk;Zk/TxjDltwCh-');
define('LOGGED_IN_SALT',   'Zpx3Cee$n0Pigz.MUZDN@NZf{ZduzBCWm<Eq-Hu3SsqvG[B*(-uY&Eg0t;gp]Cd$');
define('NONCE_SALT',       '7~e^nae90U_$o}n$^lX##T3W:(6vaV%p:n]t=d7VHXv{.$,rBFI>s)P1 =K&:L=J');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
