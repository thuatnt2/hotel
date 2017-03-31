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
define('DB_NAME', 'hotel');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         '>m2u{7v[q,5z++.Kyo<T6=FFk0jg.u,f0~mOl]>x)]UL-S(m*Y|czphldCCNdV%U');
define('SECURE_AUTH_KEY',  'UoSd1!x=h& i|pO<1~|pB7e|)iNfh0h|oTgUXFGXOo s9#?]m_Hr0rM`;i9UHV50');
define('LOGGED_IN_KEY',    'F*?5d%K7ZkXa(Rhj1~B1WHExc-G %tKomVh+]U_}%WjwX}`tu#|-iO}zfjUjy=sa');
define('NONCE_KEY',        '4/FDB*K~!Q4p*AQ2r4X5R/@ /Yits==e;*4KQ[+hQ^aB^pj4!P01$c!J]Wnt>%7~');
define('AUTH_SALT',        'cMk/h<=8fg[1bcPd}mvM_u&M=i{n({X3 KV^4O7m]NRFugAE86b0b+/T,QY@2]qN');
define('SECURE_AUTH_SALT', 'L;SAIMQZzRW-3>h!3zpb*kbSq7?hh{GD!xSRQ^mmpcf3W;^8=&u.VpW?(xSU54sd');
define('LOGGED_IN_SALT',   'mTEqxBE^B[H:U:#*_c[C#+%0|#EkSuR*qf5zCc(Mg;Fz4hGnR?qv>I^YiF!QFBwN');
define('NONCE_SALT',       '5IOrN4+**,S$DO8i]iAE78BnT<|hs3o5R=-jY_Qc-nQ#5/v[1}YcX6z/|afneLTW');

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
