
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

//* sophies rettelse i forhold til installering af plugins*/
define('WP_MEMORY_LIMIT', '256M');

define('FS_METHOD', 'direct');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'storyscaping' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'MyH-.4-fBq-{x7Mn.|b]^200/$H rW%;t7fzE1Mqf+pGTJY.xaU6xgs9t*#7LLf3');
define('SECURE_AUTH_KEY',  '8nvtfj3ZC`lH%<{PRX{$[y6;Yw4q(z^_ 3 zC=d)l-k~Tykt,2I pYc|]tIzMg$.');
define('LOGGED_IN_KEY',    'sga9#/rV:.fl,9^Lw1p[%,c/+@4a o:|ND[_#j@5g*9117*]#)[UaI$BeV0(5Bqz');
define('NONCE_KEY',        'i`7jB(J$-ye5wd5l_ PST-:ooxh0s)wUeY4$8h |U{eYe7mi0aF~e*dHr$&1bRZ/');
define('AUTH_SALT',        'RfKICrh$|+@A.D]W%}#Xckh}(S?W+cPJx(Zy*q@iap9ctpmN=-lz PlLBCNk UB+');
define('SECURE_AUTH_SALT', 'PO,w;?tLIysVs` eej!%Z#>{vFwC?x[58|T*G0#Gcl; xI<a;B4-i!`DsP.){7oN');
define('LOGGED_IN_SALT',   'iiK;2|Tm6jhcVC5T~R-nh_+EtOf}=zKh<sY@Szy[/e7V(d3jG>|ez4H$WoLPXIR,');
define('NONCE_SALT',       'cS3O5~q&=^Z.JF-Hmr@[Kh[2d59?| IVO;dpDI{qw-|XPFAZxz#+47>TAu0$eh}h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpstoryscaping_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
