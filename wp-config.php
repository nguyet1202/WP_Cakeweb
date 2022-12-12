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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Cake' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         ',M_mdDtk9|:yPK)C,^ektan>vNN]n60#Vg^>=G|?dL4AWc(_+RnC+VXVYm<U7zM1' );
define( 'SECURE_AUTH_KEY',  '?-McE%%ZAb*hyEoRU]ga>z<ePR7&_T~qA;y Fo_)pGcfoez05ud2^^a,{S$~p0KP' );
define( 'LOGGED_IN_KEY',    '@Vy>wiSBk upH%_5zDp0b`A=TShrX6D@Jown2B=PBM6%!}I+rN)-iWknUC[<.d6}' );
define( 'NONCE_KEY',        '*1)@zNvFE8.D*+y{hNn&,Ds~_Ec+#jt.v00_2{LO>z2+458DgK{}%hHy@9Q-QhM%' );
define( 'AUTH_SALT',        'x${DC>xhg5a-IM2gTd:yAJAv80v)KU3IXkl|Vcuk|vDz@%?O.bBvm|q:A`46+cNJ' );
define( 'SECURE_AUTH_SALT', 'un7}@I5[)g2aLl1kye|mzu4AANGVg4iwc# )Ei_U}Bi/W1Cc4M&i)D#o&;^lqmUw' );
define( 'LOGGED_IN_SALT',   'NWxLz-7%mTY3h*=HU;U~nbaJ!48@Na[ I@bRltn1=`=|b}mhW}G$vyg_|**3`,BG' );
define( 'NONCE_SALT',       'yJCHka[5%bvB-W0QIV&|PbT*Q|uqiN<|58rDv^GgMDItk5@ kVDJTS3qPs6EA)z.' );

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
