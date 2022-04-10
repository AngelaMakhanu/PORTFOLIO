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
define( 'DB_NAME', 'angelami_wp484' );

/** MySQL database username */
define( 'DB_USER', 'angelami_wp484' );

/** MySQL database password */
define( 'DB_PASSWORD', '9unp(LS8)6' );

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
define( 'AUTH_KEY',         'qkk8kmhoi1bcpt6jxmf53smqyp60xrjvx5wodp3dhesgi9mdl34cpbwqzsnjkok0' );
define( 'SECURE_AUTH_KEY',  'v9utmkjdsw1lget3xlxkzfqr4erkrrfz6qdih5ssfazeu1zhkoqo0cbqlzxjiqhb' );
define( 'LOGGED_IN_KEY',    '0te3sdlbglbdlnlacdyjiitdowqfpioudvixoynxbgqomfokaebn5l3rgd7ewgwq' );
define( 'NONCE_KEY',        'gzppwmbcgaknsx8llrgdxqy2esf2ch8en7drsrdx49hdiguz60az3ued1vixowgw' );
define( 'AUTH_SALT',        'kgat8r4tpq1ahlv5l7t9fpgn4oneaiaeuapnmrdf8ox6lw8nihnneixdhbgeyogo' );
define( 'SECURE_AUTH_SALT', 'ozxqm8oqmymwuamsn8ygirbyxywh6o8dr10dyvgdcqwde6wum4319fzfznofwfnv' );
define( 'LOGGED_IN_SALT',   'div9erxw6pbdszji0sk40cxuub6lvx4joryvbbcpiuv6kucwm9rrnaqoe5ay2pft' );
define( 'NONCE_SALT',       'hqhddngwxisjqnwzqtuhxblak3bmhvc4jw3rb0khajly2fgjtezstfsp4is6x78s' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpju_';

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
