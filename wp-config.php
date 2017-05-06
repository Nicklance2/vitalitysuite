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
define('DB_NAME', 'vs_db');

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
define('AUTH_KEY',         '2kJwx~m 2]I&M+NxcJ1y.jk|1A;99eGkSVel6*KuUfC7+&s[]x+1y]Q|a<*L5(K?');
define('SECURE_AUTH_KEY',  '?`URbbmC+MP{N9`WH|@iw#=vwE%VH[RU.2MGO({yWL^PVl3t{:gBM^Lrqra0.S/E');
define('LOGGED_IN_KEY',    ' Egve]l?jc],]sMwvii>u8ksjqr]>/;z=WHK`}OZRFHV@A:4. <zg)E_Jr};f.aG');
define('NONCE_KEY',        'aNO*1iVS!I9Tfff!D/:{-GtBsnPON_G$Zhbw@-ZbsnK}@j.mZ;mm/%SGi(M`a&?:');
define('AUTH_SALT',        '39E~eX[NBQX&5$_slnzuWpUu04c_2boQ%,eYRfoy{n|nlBIoCT+A_v$1(QJ+Uz^R');
define('SECURE_AUTH_SALT', 'g9wXl{bqOV8|NMHk-_se4)uIwbpX-5[[$_r;Ff,O^I?a8YTGm%43D/nLm=+{&NLy');
define('LOGGED_IN_SALT',   '#ME>v*hL<c0=7>]@EG9W/j5+6Hw7tkb{.TH@;j~!,4!_R@Yp%{nF,T%EX9{0-aL2');
define('NONCE_SALT',       'uZ^} %T+1Pbq5?Ad2_H(. e>G.3lC]Z&L)+Yv)dtd<{e|A#Na5x*6KN9g_URIQ9W');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vs_';

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
