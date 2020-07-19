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
define( 'DB_NAME', 'etsindia' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '(lvNECnMpG97TIdr[-y{<:=17Vui2+|K=[M9>T<f(3pT0H_Ce%{(:o-Vk)e]*+)?' );
define( 'SECURE_AUTH_KEY',  'TILSk)Anfw;Qv|_bt 5S-#[x3,VmZpONE^EYLQ/+:Uz~ZNZ=e%E>F>Kh>KQNg1ea' );
define( 'LOGGED_IN_KEY',    'O^}_^YV&2B!T+,@ty;`o_k@l.;Bipg1*y+*,RyKe+/Wu+~dM -}pVlk`wxrG Z5C' );
define( 'NONCE_KEY',        '84iAN<-Ay~Bm_j5vXASy8[|Y>.Br#;Ee,mP![~qee_l::zbZ4/|#nk+A,V/Qri{]' );
define( 'AUTH_SALT',        'X,~kfVW@FPBU!$a]GYsfDc)W YAG+(&4Oz9f#~fZP=Xk@GSa.{M,|wZ7a5#0EE)C' );
define( 'SECURE_AUTH_SALT', '_EU#=}REX;}Kp~s~|A7}A*BcOh}MP2kr$#a*&? knb)1Mu>#712nA@xI)$#`S]|`' );
define( 'LOGGED_IN_SALT',   'G{.#z4jiLT]rt{i,MqEs3:^]Lqcfa[>+bkP-ibbn7@8;tY`]L$+^gl$ ?r{d7:Zr' );
define( 'NONCE_SALT',       'ku_ $mPtnu73|Myh:<[G{.dXPHoPEvhqV[JH2j*vx]5CwD|C#_p~0g[TAJ3Hocjh' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy publishing. */
define( 'UPLOADS', 'wp-content/'.'uploads' );
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
