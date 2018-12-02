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
define('DB_NAME', 'billsugden');

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
define('AUTH_KEY',         '1Klq2cb8Oyt)2>@-b79!(#4o|61a$[5D6Peg8j}3Q${z`<CoDgfS>_ju`pDf|I{s');
define('SECURE_AUTH_KEY',  'p+%gyVOl*X[/^<wR{)~S2_9JWoIw,)!++Yl(LWi0v;+YV#+9J$X**,[-mI}bMEs;');
define('LOGGED_IN_KEY',    '2[~<-bFa(y2LOIs%zwenf*5z:`mAxX}c69|Jn}Hji.!cQZ#z5pX4^G2U5+.QUWu:');
define('NONCE_KEY',        'GmO{  G{d/!,On]zM}2J4R/dVYe)hR}y4A5XG84^:=8rEj7TvWK/@S)uVoF$APz?');
define('AUTH_SALT',        '.4&{?bZxd+=Z<vC&bY4]qly~t08WU6p8uo?Q1-RlK%*SNb0#iKM4AXn(uCd%z#~]');
define('SECURE_AUTH_SALT', '^v$E3`SS]Sj^gC+o_|*V2TtT:SYV5VE2mI: ~q(-;GvMYk4Pu$)39By]a_F!(RJ^');
define('LOGGED_IN_SALT',   'u&MBQo:jL{YryRG8yAVw+Gvt[8MdE/z7Sq_aKjz}dtU>h)b97h+xl/.K=w_gy3.u');
define('NONCE_SALT',       'M,T{<yTDWlSz.ouaiM;r;*(GhDY*.CUbO[EkbKdwA%^lc{]5t2=r05D3un>#FQUO');

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
