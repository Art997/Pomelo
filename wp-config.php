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
define( 'DB_NAME', 'pomelo' );

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
define( 'AUTH_KEY',         'IvBYfTIl^+RJtV]/@~~dw{y$7=!>VkFQ7GdQMEq(XBmII5Me#9R*t5km_2qFyD7Z' );
define( 'SECURE_AUTH_KEY',  '$~1R]Yre9yB%P`G=M@0c?I_`s>-(/=If59P8ghQ4@y;lY?flb9K%*A~1pw7{:VVb' );
define( 'LOGGED_IN_KEY',    'E%j=N@-(66rlE8cq ;)?6dOrN|`-}YCHRSr?!1(b}+img9Q>~;yx}&eecD+-joIR' );
define( 'NONCE_KEY',        'fp:>!]sh?i[*A;{4c@|q&vL9_5$?W|nu=C;gf1KL0;_l[dUcMVtG9A,jcey),Z?<' );
define( 'AUTH_SALT',        '#PFfR]ZNZ%@gwwx4D4F!7Rb!_qR6h/=X.a:68789qb]RRD=DA%l|4Z;PKemaB?HF' );
define( 'SECURE_AUTH_SALT', '^16OvzldlWI*^>)98Rj/o5XU<Md?4L>2y^L{g9fZ0]F~Gl^DB2App>/RE,iM*R>[' );
define( 'LOGGED_IN_SALT',   '>EQ,oGbfC!3Qz9uklcr$|(kYQ`ZH46LkDdOLj{MW@%e$WW0ew~~^#$rY(-4+5_`f' );
define( 'NONCE_SALT',       'M+`Cg$p>E:lWkn6uO/TP~^!~Sq4b*CL)^^P5MtE+ej-12rCz}OQQ9xG9o[MU%%Z9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pml_';

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
