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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'db:3306' );

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
define( 'AUTH_KEY',         'm*BN=gpJ3X)iC}9CD,-2.c2U!Vj2A{z@QvgEZ:%v*n!n3]=o:[P`c&6N>l.+p~F+' );
define( 'SECURE_AUTH_KEY',  '/=zI4}%v7`&=yZ#Jq4ue#BnqT*y?1H2d*iy]qx`f!&=qT3!m;X_l|?J+ER)ad@_y' );
define( 'LOGGED_IN_KEY',    'Q+}55EhtWw3ruM-Y}]}%bR0v97|nH4K7o :[_XuO[Ye30_Hlm.?$AZL[!ytyof,]' );
define( 'NONCE_KEY',        'x5D}LOtEy!Ppp?8)6}Pfj$5bc@ZD&A7]Cl,*6Nrsl02?.{Hrx8m#j&]I54c1<Rli' );
define( 'AUTH_SALT',        '(iH$/9bzw,9[5h$R((Iq2b*D [TW,*C3J3kXZCTOyFp1f|#O`qDWhe:Z@m M=Okr' );
define( 'SECURE_AUTH_SALT', 'onFl(YGm$EZ}fiBv,k4`{sW =&1kaer]b-lDA>tu_C9Hn,sQR2-r.~;xEW2Pa/*=' );
define( 'LOGGED_IN_SALT',   '5)*JJ|7s:a)$h_nP|vA2VNmUFnsv&n70Jb=t18fgT.UBHWmd,~9I>yF<{bv/^G/s' );
define( 'NONCE_SALT',       '&M1^6s4^4tP=@w]{#Q%^OcWfaBD 2?L]1c-^*8wIQ9g^h0#P_@00dSuRc~0c1lSC' );

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

