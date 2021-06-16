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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'autofit' );

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
define( 'AUTH_KEY',         'D8,d=K,6@UR#@s$!XK{v;;w.Zh+fO7di__}k@7.Yq A%&]E;<9j9@OmS=lcla.CL' );
define( 'SECURE_AUTH_KEY',  'N6DpY0A-=9V&|>[i[BRK2~|IH {r36F2Bsc|BxY14h990L=|iS5,O2x{l.4:E-aM' );
define( 'LOGGED_IN_KEY',    'CqtnA6_[14feY>==6{9x[ZX2dS??zZIm?WHU*tEhKf~XdHNCo2E`=Y?~,yM4o_wB' );
define( 'NONCE_KEY',        'r9QV(8DLw&>(7*/EcL:@JTg8--[cOPQ%};*TL>z(r:nEIgbxvr$`]Lxqd.$4T1|?' );
define( 'AUTH_SALT',        '#} V6V+&mDrsp0J0OUhUzCb,6}95HuLOm,cVMiFbn+},NFSz`>b$GC.t/5;5zs=I' );
define( 'SECURE_AUTH_SALT', 'dQ $nU5phm#<K%~*~=qfQ:!2yh]BLFvL ~S_ztXYS*Ve.NfX;B?O:J*3bn7l! ]8' );
define( 'LOGGED_IN_SALT',   'A7crcJjUyCh4,)nO4S`{/F qGI-^Brrjndi}{-$gWz9yb/O<uX>s!OwBGh@~XQB8' );
define( 'NONCE_SALT',       'g}[i!wZ6p>3[;A#8n>x:@dds~?~mQI^<W6FWk;1_P~C0Be>l[G4IAd-mfAP<B-1M' );

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
