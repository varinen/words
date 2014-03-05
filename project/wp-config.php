<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'words');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'dev');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '*)|NZEen?nO~5q6gUQSc|k}Bc4Q)~= HXfA9a1&(~|f$#v!Q:o@hX#%v.Io^+~*s');
define('SECURE_AUTH_KEY',  '8vcM2@g)ej+F(mySlVf`~tm9BNU`8?:wJ+@c?@d8_`?2oG5H#{zsC)_+--~.!>lR');
define('LOGGED_IN_KEY',    'rKq9_Tf`y.^of]Z#D(/5i>y]MoEM}#+~|1#={EDg^~(ksUpryx8rNbq}:S#eI3~!');
define('NONCE_KEY',        'O@K8E$e:Ia{9u|){j4CyQWHsFMn61bRt<qBF#SOGAh&coc.r)]t;+kZKglTcj =P');
define('AUTH_SALT',        '|atn=W;;|eM{Lfg|8zI,18 ``@n>-rFN%;EnAkjS:lc~PH5rm:/e-Ai^8NFrxv.4');
define('SECURE_AUTH_SALT', 'g7>+*9$&5KG1z<2H.4]+7|0 ,WUTlQV}})=<r$y*O?9J6xfL=}p$VYE?<l4e7fW*');
define('LOGGED_IN_SALT',   '7.L[98`)*sD|::PKn{F^B[Ji ;R -dr$7O>08~T6%~x}k`SV(vXx+a58S8V<M$X!');
define('NONCE_SALT',       'jWGhv)H7|1pxU+[NooK^GCp4jlXqu%WI5|@dB$Z5$&@X*X>HEBfHT&e;I,,M*iZS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

