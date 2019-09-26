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
define( 'DB_NAME', 'cmacgm' );

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
define( 'AUTH_KEY',         'gs1ZYY:GoGVJ9R7e[~GmKAIw .m@ Q!PGvfNlz$&|7[ ~)k2LlOB2!<_LRq-6?#)' );
define( 'SECURE_AUTH_KEY',  'Q;:JeAORA^D/2N4=/Y]4lK=-<XTFUmN=y:bE?vvUa2v<n)a|(uNpE=~Ss^4T[-ME' );
define( 'LOGGED_IN_KEY',    '*Z5>?fGRw8vH1WA23EiCx40Ylx)Ro2 Q8371I,F@BAM/?BA!@%ZAGphm5c1BeC^%' );
define( 'NONCE_KEY',        'MqP_v]RJ,>oH*kc1H+n3g=@WXYY+8e:DGAnX0hvdwlvCJCS+U$a8<WZq/qUV?7zA' );
define( 'AUTH_SALT',        'eK/ZCp1yVhtpv8@mwjb);lLj{U #VSip3koc/apwh&B*ak9`N*TfzVBS,b:pGC|g' );
define( 'SECURE_AUTH_SALT', 'fu[opDp$Xs_Lx0VE6oQ>jF&/xQ;OO04:Y_TO8B%de%fB,6KekbqQ5SwSZ,cWm,tL' );
define( 'LOGGED_IN_SALT',   'fr6]#j)ATj:M7cq^`0o/9_1Q }$JA]:Bw-w*ieT;B<Xo=;ywE([P>CgX`;nKk:[1' );
define( 'NONCE_SALT',       'yFESt<I|?lLteto_w<MPaYL}Q1O|-AxTzy{Ts~WS9!9|#F4!*N~SVx@HpR&Orh+^' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
