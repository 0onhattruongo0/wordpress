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
define( 'DB_NAME', 'site1' );

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
define( 'AUTH_KEY',         'Vf(AWyP;@Oxkj}c0pe,z[QwlP+>yDC@6 &r<K+-eXF3D[.[b-pg6?%6Ca+ND4+Gt' );
define( 'SECURE_AUTH_KEY',  'gxan=B&`uJ`$O`QhX &dynjuj3q~|%0{%GF2^E&c)4n&rdGW(pB05QW9ZnInaMW1' );
define( 'LOGGED_IN_KEY',    'e*|Ki[)vXn{n0 d$dCZE$+n tYPeB}GZg7X~<_nKGw> pk[twRX{{8-gIj~Fd(!k' );
define( 'NONCE_KEY',        'Dywkk>x#.QG|AR<-!qZBi/aOk{cElnYj{;*Z{b#Ole!/u`XrpsY!4juoA.biC}P(' );
define( 'AUTH_SALT',        '9CS#7Q29*Q.#^#)I642] 4LnL.g.7A{C>`d__6cf+>voZV@.8TygYL@MmJp0_Umn' );
define( 'SECURE_AUTH_SALT', 'B~?xrF|[4zm%zw_ Y^QhIAG/9/waUEXb2A$VLSy[ 88L(;xu5[=gWX1NeM2hyU9U' );
define( 'LOGGED_IN_SALT',   'v~#_82Up&I|B!f,%[X_Ux[&tddt5_Cw*b-wwd#J&6${=wuWVoJ$r*?Ifq5,RVj$O' );
define( 'NONCE_SALT',       '=Ax,hD_S}6zrtfd.<6 @Ms15jq)mUeoe%adPx8/eZq6Gy)Uw&LT<aL{IMRw_1C:`' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
