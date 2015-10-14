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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dlE:RT=rJyL|$3~23}>l:^Agxz}0s,7*}o$-g;C*6XFm#pg*9NL-A l.Y*Sgfb2D');
define('SECURE_AUTH_KEY',  'PtWnf+;-):Ec}{H,f ~Hevs;?[uugcmkvsP:Hqy+Q,%dp[MRi]~F6.93<Y,NpRX4');
define('LOGGED_IN_KEY',    '00k$A;02|+[bIws0:_H[+t~3ieQx{D?N$J9#@2A$8cD9/Xb5t|}IXC!#X>2L(_^t');
define('NONCE_KEY',        '9m_;_?C{{-yf;7^mO,PJz3+C2&^u^d_y1h3m5`Nel(H<9xG;NT RZ(kySwWz/l>$');
define('AUTH_SALT',        'tn ;8;Zw}^:>(`^:K{-O-u#o;w7|/HhLec,]8nMlN;MdHmng_0hN(;K8(1`$k5Cw');
define('SECURE_AUTH_SALT', 'n(qd*IcD|,:|EYlplE_yHoB4svQ5:1EOwjy=EK{Xn$xe[SP2?T3|NNnZwu_R;KaG');
define('LOGGED_IN_SALT',   '*k&-`>2M=sK%&3EJ57Y2S]/mVK%g-N(e1{&^aCzwVl+8>]))|N,VmA3Oy*!r `^:');
define('NONCE_SALT',       '5w[=5!YhJp>%A`)8b;&qFCxL4,yJV;>f.`G}q)a8 u!kgsQTM?l25qI*Bt.$1WWq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
