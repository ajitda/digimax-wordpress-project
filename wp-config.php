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
define('DB_NAME', 'hubs');

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
define('AUTH_KEY',         'rX%E9{dmzueN38cd[EJMjmEcQ9bfQ+>XAom@$`69_g,J#s^_RKK0_NS/.gN{ ]`<');
define('SECURE_AUTH_KEY',  'MvpMvE?^47ZiqYFD2nh#]FLINK&D.eG 7J#&kC9=DPP.N*jA<nY{i&bDSP)3lxi$');
define('LOGGED_IN_KEY',    'w`>Fw/NZo1Yn?Hl_XQ*x)SBjJM*o!}7,_<>U;Vt:4a!8-%W#cR+P&t;NrHVub^a;');
define('NONCE_KEY',        '9]HAI/s=Yh$`0cjpr_E#<}MMM jJ>MT`4#Ic /6au#0FMAI>*!PC zQ]G6r> 2_]');
define('AUTH_SALT',        '#)KM,-WctujFrE!6&&loXF$nS;[Psh]BW4F*=!f08d2X{ujV>ZE_Z7 bz 2DA iO');
define('SECURE_AUTH_SALT', 'HDbU&a,B1+m6M|i2zjKYmp?#:Q,N|ER.(c8},b0V`!pRcv9V?N464%bBejvo#Dz$');
define('LOGGED_IN_SALT',   ':?1V:eZTA5nxel;BG-{$^!,4rU>dn3 ,OQSr/1.a$RG HDLC_!]tQa?Ya&)`H<$,');
define('NONCE_SALT',       'U;_|`}0a^l] (&F:;=,l[``&Ggt{JxV0r5,;`[z8`Xw((Kn;%Do?e{K1eg$4p3+#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'office_';

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
