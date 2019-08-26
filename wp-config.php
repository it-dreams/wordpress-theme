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
define('DB_NAME', 'wp-code24');

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
define('AUTH_KEY',         'Hx,NGGRrp3;gj,hmE)8dla]uCp{=4>OQH.iN/[l F^wu-L*r/S>fg]f]Jj*<Oe<S');
define('SECURE_AUTH_KEY',  'EqiS1<Z17j47*XdodR(ZxCrpl2e-QksPvWrLCE&3G(5+wo<Og/*_tA)-Q|#%&~n5');
define('LOGGED_IN_KEY',    'St+b{C|Ps$UG*/|R4DJx;e?J$O.0.Gfem[-!m0&W(K2Z~=FRs_y.Y}=<jPq; ,fT');
define('NONCE_KEY',        '4jW:W(wPmh#m)9B>WMJ,k$C2B/j8/@(0x{4~;@}3+|R:xT24;?v#4{~Z@cI 42|T');
define('AUTH_SALT',        '((]szR|ah=O9f6Xt ;npIy[<6yFIB?:H [3MWud$H]%gE{t09;I9[D]k%`i)MFcu');
define('SECURE_AUTH_SALT', ';xqPk4QMX3k+M[GRfa;wa%zs/^g0Gw]a16RMpA1BX6|UDtC%+;i.`{oPwYFzo.x6');
define('LOGGED_IN_SALT',   '>Ny0o--yonZ#J4*%GSb-p[|}Qj_N9o1X3~f<J ohSGE8h^>lwPs!+j6#:.#:%Sb ');
define('NONCE_SALT',       'Xk]|{X)^7,u@=Z#P<h*>lebpKP-q0R;[uF<)%:5o#;=42S>B?nM1TEwK&+#]hKF{');

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
