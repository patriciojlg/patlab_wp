<?php
define('WP_HOME','http://patlab.cl');
define('WP_SITEURL','http://patlab.cl');
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'narcisismo');

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
define('AUTH_KEY',         'tv).53xiYGCVxNU}^qt+AAsiid3AG[@!fR]J_oxf*~AR_f@} xNmd70twObmxb{4');
define('SECURE_AUTH_KEY',  'w$C+RD;fN}w:}%ZK x[f$O8h%Gd f5<ljh+szlwL_6nl)f+t|6Ch[0VyTY9BJJO@');
define('LOGGED_IN_KEY',    'e[s<;9BxC5S8H+-j0Ok,<#n%dSc3C6&V8Fs?@>g{gH;l@[jzSxR;4VR^Tloj4T9t');
define('NONCE_KEY',        '/!j[E/%?= _Z5@{5rA35>k/%2lG^8}<c#F,(ssbO|/6al})L]v.;[]d3>Id(h_Ja');
define('AUTH_SALT',        'N8uWVhsqx*DcI0w5B!r1vdCCcq<(v9`b]fRT!&;z0wk_!2- 3l|+pOpGsMVHkjIb');
define('SECURE_AUTH_SALT', 's/i*?GM82J[zKQh+lMyLPf}2U+Ui?Tgm)qH)h=Tpckhos@,k=]s30hj_8vwvXhHv');
define('LOGGED_IN_SALT',   '*Q4^y)EEfEMdkq6mbui@JGNuenPv<!^C8RyH9T0->6PwwSv?/|P/nK$$=`~ScubI');
define('NONCE_SALT',       '{T:ILAJQG+kYr}_SGr<t~bCO4c.I(Rm}4*X^Jlq8he4Sqw_{5HA}5/5RAgkxvK|9');

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
