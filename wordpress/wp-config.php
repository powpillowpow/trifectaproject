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
define('DB_NAME', 'trifecta_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'projetoSI');

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
define('AUTH_KEY',         'YZD*JSymJ|;HXx`lHUP^@]9Pv<Tv| 2Jzu@s^hn@!+aGeyFlP=_qz,]h19Fu)6F=');
define('SECURE_AUTH_KEY',  'I}GGlerJ6qa]Q:HC$Hn5KYYUJ,4_>~uvH]mhHyDn,u+1UqqR5adfw3N-8l [hB_6');
define('LOGGED_IN_KEY',    '4gxfJJy|.y6I4}IP^I8f=oG7$.6 Rg@WcOi*AQ;:Tm]5t,jmOwd!!#-5H#|8Rr=U');
define('NONCE_KEY',        '2&Y2f`f<xmAz; #0onA*)^648-H?zI[<0>4Mt|.4fy^rS%]{xd<O+q/*3Gym59cS');
define('AUTH_SALT',        'A,Vm,-XHr{G?E-h-OA{ar:Oqz16oy}z(I2z7%t%6K`0{VlBW<yb$=}~bPA.G85W1');
define('SECURE_AUTH_SALT', '(.E4Mo25z.tDY]jPg9R]D>a_}8VO[)6^=mjePn@5u gV8*EN [JD+&Or0W[h&IUJ');
define('LOGGED_IN_SALT',   '{Xi!)Oi(Kf!3?1|mkf;yg+ $|}pPq #J&#54]{)UMWDkC[TS53D*if6~i4cG^8)u');
define('NONCE_SALT',       'j?/X*.OFQ+r8J|*1hY6Iwwc6RKe=u-8%opxd~V/:rs52Whl4u?$Cb#uC.!xi9Z D');
define('UPLOADS', 'wp-content/myimages');

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

define('FS_METHOD', 'direct');
