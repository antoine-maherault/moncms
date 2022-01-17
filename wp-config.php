<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('REVISR_GIT_PATH', ''); // Added by Revisr
define( 'DB_NAME', 'moncms' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Mcn_iZL-+)kLi/hv<FF-d1~Ye8fawFb ql4qh3YTkfUMy65PP4V]#=_{G75Lq{MG' );
define( 'SECURE_AUTH_KEY',  'z9~d1~y.ag=z4xGA@wpadAgc4( fmf|Yrlb|eY6!F+IUE]fFXH]TQxXA<Y3IxC77' );
define( 'LOGGED_IN_KEY',    'd<p-LB<%8cxC~~Z,(H7Ai?zKQC fHohAwRQ>J`S386}@H^k!|:3;/w$[XkKBv?gs' );
define( 'NONCE_KEY',        ']i]K6])Mbc/3V wL]y%79I|B_=0tQ``M/M9o|k=I&r%m5DU&3Lk>RX9E8!<LC`P(' );
define( 'AUTH_SALT',        'R!{v#UZvXE}uf`cDO5Aw8TmB%9:c9q{MilV?~qp8K_}/#whKg$)e-%tkgcDYPO2s' );
define( 'SECURE_AUTH_SALT', 'Ya4Q%8mvekf@sAi/pOnBA0K#Bq)Keu,zm$r-lluq[L?@dz?:>Q<``!KS#Lh|/Z?&' );
define( 'LOGGED_IN_SALT',   'rD{(!nhm@^)0&yWj7_6u+(RvC;PBmSSO/(:-t*Yi/cc:POUVTohD_qfhZQtr%>!c' );
define( 'NONCE_SALT',       'g4_a~SpWLICgv@,a.s=@c6p[$5,lF!ah_PO/7S*%q;HYS#=~ A(!p]jdAf#jRwSu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
