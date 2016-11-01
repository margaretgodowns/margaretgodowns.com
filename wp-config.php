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
define('DB_NAME', 'wp_portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '$/k)bE+r4goK4U3;C(%;VhpRM(/@])~s[&nTm`$E2fO[xmoZ3FkoN|(d0LB<p<7Q');
define('SECURE_AUTH_KEY',  '/vj+hz)$hnoF`R!_>yZ4TKmXqx,}j-zD~!WFJylbY/0rvbV&fq?A.XU~2{_S+Sf1');
define('LOGGED_IN_KEY',    'o~-Q4rQZi5eIqgT;pt+n-LM4_Gm;BrIg^01c{G`P: !Y%BH[-+L[.DZ^WCc-*z&@');
define('NONCE_KEY',        'iB|<|uKBPilX>3_vg]u?rE/0K(E/D+7u!iV![#J<L&R)J3d&S`[GMI.I6eX6N`Z>');
define('AUTH_SALT',        'Q>HS ]Tki+a2TZY]1)J{N0l0z.U&jW`GVppXEM7p6 ~etyuw}g7?FU0c7:^-C,K%');
define('SECURE_AUTH_SALT', 'fJgIjpRBjXj:gs`W`Hp3aV4XY|t4j7moX4F~5XK>%m)C-b*Q5(f=Y+F0(0ONTbj.');
define('LOGGED_IN_SALT',   '`>ad/{(!v0=HkhPc_^>o8<Y^Z711YB9`L$3Al:P#Rm{6}Tl_#ep|F~jTjDsZ9`P4');
define('NONCE_SALT',       '#`>ewodkAOR)_7S YA7M8v]:sQ!S0#4T4@M{&=!2@rZ4!tS;|,J#+8dOeL2[po6*');

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
