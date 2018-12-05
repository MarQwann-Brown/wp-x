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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'C:TMyQC@0F,`:U.)F=KgG>aTemM~T~RCL!)V<[O`c@=_5Al;4c=WoiW`Xh<A k>F');
define('SECURE_AUTH_KEY',  'Bip#`qx88;S8~%}p8fyHb=X%WX*_Aa1TTEl<A/4s$!dFx.;AZzpJgAe6@oL$JfqX');
define('LOGGED_IN_KEY',    '1noU!auPiYF8R=9oZ2i+9HSa,ugVo*z3.C}+sz`LTf]<[axxT1ptn)e]v%FH<@n@');
define('NONCE_KEY',        'r]s)r/;zjKJ#WhuF,a.1eR2VNP]}N,^FJEu|@XPHJ+Q>5(+1*xuf_ wG{+ve&&m[');
define('AUTH_SALT',        '[!3A.~j&paDB+=kG{S7L$$q(e)km)F-d/BF6vhhHdK^aY?y_!.lm|e[P[<ot24st');
define('SECURE_AUTH_SALT', 'u%^2ipI*MgFI6.f,o#P7U0`e-HXlH5+I%Cb)0;r^p4[=:UPj7I,.r:}C0@`VRp,;');
define('LOGGED_IN_SALT',   'Sy_FzT-_Qfb1=zO!N!!Y%*NcFX@Ey&wx,wS->E}-aikh$D2KzJ:(kRsJsCs*m&R3');
define('NONCE_SALT',       'nN-l8-.R^avYdS&# ez]GrAR62![){Xdo?1^)D3#W_-Vf0kyu$(&2M&O,8}(0i5>');

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
