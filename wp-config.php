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
define('DB_NAME', 'code24');

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
define('AUTH_KEY',         '`sH/NoL_uh(Hs*+nrz9QIB!`DGIQI.)6-;jSvc,Px7er7l7LVK[-wC_1*|>m*.<^');
define('SECURE_AUTH_KEY',  'aH@P{,F+nH[kZWP.5yl..s>(ycNmrErAuG bsiJGw7Ftwo^rI^`VbIj(zw:PIy+b');
define('LOGGED_IN_KEY',    'k 6vo8|X*|-{OV#q89|buhTD_ _IaSkG4~f vv[xoX4SlzWO*uIw0`UfxI9*PXEk');
define('NONCE_KEY',        'QrFb[]0}Tm#-Ey2S;21C !Ei`aPRD4e,=x?S^f7N=U7Jw{+YVF|/:I=?po$P%S!2');
define('AUTH_SALT',        'YucAY<D%HJNP{%;k0,6D%?c,q/[1RAd}N!7Ce/sp)9<bmeZsjjVH|>e?m!zdy_n ');
define('SECURE_AUTH_SALT', 'GRim3luoSOnag8UJkqWz500),h<s+3[(8Qdsl{8N&j%VsU^ z4A2-z>rqL>[z; N');
define('LOGGED_IN_SALT',   '&VsjEE,T7w8BnlBW2z}sD%8n<pc(%f0eL^at@T|Or^6PawaFIKpGY?R)AiPUk{c>');
define('NONCE_SALT',       'rrC|`8s+8U.YeNyt6iaT$ha}2>lSI)_7 hwjtXAFk$LM1+E=A}>o[@9/E`N9~fDx');

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
