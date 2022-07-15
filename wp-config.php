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
define( 'DB_NAME', 'setting_goal202206' );

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
define( 'AUTH_KEY',         '{u~Po:89<Ur&wM<%OI,..c7(&Mw<~|t}4?[Do=c~nYR^;PUXf&HoB(:YhoWC#My@' );
define( 'SECURE_AUTH_KEY',  '*?DT)upaU(#(HQ5a>^P_hnPf41C}A>y#0u^(qafmE~qIfjV/dBoor]esmwj6lAtW' );
define( 'LOGGED_IN_KEY',    'G:A7V{]x/*t~iUB9;3;b-hQ,rWA !dB%{@e|VkKi^^J,[h >(V=.LAqD0q*f>04M' );
define( 'NONCE_KEY',        'tE#|#KX$|y|4v;z,7Uhv)+RfxcX2</AV4#zU~4:1(:H1KT/rH};<fY*RL=uexj*m' );
define( 'AUTH_SALT',        'Q31~Y=A@5?oB_s?A+ ]ip[bg3IZ{DS#ZfZK*NVWuMeNpMc)i!g4h1/Cbd+qfqMaG' );
define( 'SECURE_AUTH_SALT', '<gV7>l6P_3Zoz2$2*_K_]Iz`5kBWxG~~$^])z,|:;qXZx1kX:O;<cbsygnS<BGE@' );
define( 'LOGGED_IN_SALT',   'eX7Citi>pJ>Wo`}9K$(L,CRKZ&H8 3dw+Kbrk]tVnqWo:usi5Z_n>]R+9e>:^Zl]' );
define( 'NONCE_SALT',       '-u$8nX5J|L-*2m_z993z]0ml^1s$t`=Q4Ia9,nWL|Pr{6!=7vI6AN_IOaXx%U)ME' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'haotv_';

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

/* Add any custom values between this line and the "stop editing" line. */


/**
 *
 * smtp
 */
define( 'SMTP_USER',   'haotv@icd-vn.com' );    // Username to use for SMTP authentication
define( 'SMTP_PASS',   'sodmsmqcusbjydbs' );       // Password to use for SMTP authentication
define( 'SMTP_HOST',   'smtp.gmail.com' );    // The hostname of the mail server
define( 'SMTP_FROM',   'banhduanuongthanhbinh@gmail.com' ); // SMTP From email address
define( 'SMTP_NAME',   'Bánh dừa nướng Thanh Bình' );    // SMTP From name
define( 'SMTP_PORT',   '587' );                  // SMTP port number - likely to be 25, 465 or 587
define( 'SMTP_SECURE', 'tls' );                 // Encryption system to use - ssl or tls
define( 'SMTP_AUTH',    true );                 // Use SMTP authentication (true|false)

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
