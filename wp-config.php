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
define('DB_NAME', 'jobportal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'www.994.com');

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
define('AUTH_KEY',         '*cQCMbK{^9nhu@TkZx[5wqv{x(-:W*bzJ$$n?4/j5FFg28? co6Ste>Nw)i8|y-+');
define('SECURE_AUTH_KEY',  '/Kv9ew{pR^[Sn(x2PX=d8)9w}IK`jyl7K.rvdU?sq2=%kf{/=0(`*WT2w|S[EP 0');
define('LOGGED_IN_KEY',    'Ss+7jo(>p49hp}:R-^wQ]NlYK= !A<6JK]D|L59$[:#>t#4:r}1&ISoxdDz`onpV');
define('NONCE_KEY',        '5?-Fnfa2C7bnu_qMfBaK&x1NM&h>VQ+5!ltK888Mv K?si*yKfd|HhSo_`GEe+1-');
define('AUTH_SALT',        'Ht*Ser6oVl}N4el>$E5PCWtRcD:Nc#[JtnyL-hWa?(J#a0xscG|7$rW#T)ooce<M');
define('SECURE_AUTH_SALT', '@n@i]@.l*sJ~3];!@1LVlwe3(@Xsl$]*b; OGLOgyS=q)-4`71F0|<1ZHkDp9;i#');
define('LOGGED_IN_SALT',   'fMhH~Sb*,zxWaG3l$+~yRQAOqBI#}=maL*v,Wd8I}Y|D+I=|0E@e36:>Io2vgoO6');
define('NONCE_SALT',       '1DfW]zNzO^Z1x|InSTEBj/N^fnD)P&R6U=pA=jM]4XOpgH}(axz*:5hyZ/EqUeLC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jp_';

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
