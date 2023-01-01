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
define( 'DB_NAME', 'practiceinfo' );

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
define( 'AUTH_KEY',         'pOdn}]gc$-{0=*2vB}q9lFXXi]J3;}dE@<vUKQOw!5hT@yzIgR0Qj<0GR->R7cw6' );
define( 'SECURE_AUTH_KEY',  '?VD,gSe*2YUPms|FfKNzKUg~J(UlO`?j>93.:{3Phu%34>a}_&yto&`D%LE0aFQ/' );
define( 'LOGGED_IN_KEY',    'C/E,P*m07U^VYZg7:eO`/]}|)q9|)o_g(:R8#kbr<UOllf}-X-;/w-ayLmn^E@Ks' );
define( 'NONCE_KEY',        '^PwqFH!61<anjJ&Eh:PiK]B?cc%_@;-(CPl}I>n!N`Z=c(e9):(5m4%+wjK:V=D/' );
define( 'AUTH_SALT',        '5@QyL1E{~7a-}aO>g4l(p|`[;MfEr ?BW;+kZDr$;v/ 1V3:a<X7oAe^-L1^rP,3' );
define( 'SECURE_AUTH_SALT', '2lZekPTA8LulFT]N7r8%jdkkt+t<oZ@:_y*;zg.T7]w^E1#*EG(+nR]wo{~&49,g' );
define( 'LOGGED_IN_SALT',   'gUVX)808-V/+B6s.Xpf,t05U;}c,8S:^Xi^DS9syH:Kj$z+Ns.7JF*W~;,+x@/uI' );
define( 'NONCE_SALT',       'KlFrancs^ZLi8^)iHr:)6tKoWbCVW4qN>L%2EJ65BuIo4f9W5,zY|-[>~w@&=Gn.' );

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
