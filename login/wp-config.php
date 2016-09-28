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
define('DB_NAME', 'a3476678_test');

/** MySQL database username */
define('DB_USER', 'a3476678_test');

/** MySQL database password */
define('DB_PASSWORD', 'totti10');

/** MySQL hostname */
define('DB_HOST', 'mysql4.000webhost.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '~FmKq5/o#+3WX(YY{KiPLWGlDx+z uMZQ>RO?i8?v%~Kr_g7GD:VD(z9`V{7QJ[#');
define('SECURE_AUTH_KEY',  '~{nYdAo4EPQd/ba-wdTyvd=[_&+8[uqJIq#=H:sZ6hg:VQjzh]s:R0M8;Xu8p3UY');
define('LOGGED_IN_KEY',    '9lg}E/BvJsVCvtS-@rm`AkeHFoS+1&JJs=)T)A]>F%Z^dz|ThwJzIQzGc&7yuh<T');
define('NONCE_KEY',        'AsCM7wVSpT)h-IgD}/j!U>!KA a6a5[.}vQhrs^71.m4WN4WvxT>*-:g*-}LfXNz');
define('AUTH_SALT',        'al4?hZbxE.h/4-?|qXH]~@F@~qB$yr7N^K)?,RWQirqY,=_=qq+`7?[4_qNJ[da-');
define('SECURE_AUTH_SALT', '>77#c^s][WL-xR xU?i^GW=fH+uE}X5[ha@R76dV~#f3fUi:r&hr5FJ(lD;Qikl5');
define('LOGGED_IN_SALT',   '_kYC+VnSIuu-V%gESI,Fds9k0u5kK3:|ewi`*>|/1b&Q9J,R@N9=F3/?UtNq;mbu');
define('NONCE_SALT',       'S2 NZ[ETg%JYV8Y;!ehF)w@R[i>UVBPGtGTt 6O`GKX *|^Zda#pv<4kZ]qA35X^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_login';

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
