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
define('DB_NAME', 'lpm_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 's3m4r4ng');

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
define('AUTH_KEY',         'Mt~.ENrENO-pZom]n{0A^mf?HcAZ/#Dy!@$8,m)ZF{c[j=nr_*FlL,]w@|rI!M=^');
define('SECURE_AUTH_KEY',  '2 DKadQlv.H`h%uU6a)`S(Po(8N`t#keB(L4]*C+<)>_R(&CR[?-bcs@Ei1Pwi/C');
define('LOGGED_IN_KEY',    'tv{i{K)U0LM?WYR~Hygw3L=zkbOSyMPB|mO=S,;QL,|ArWE%>CM|#dvja=R!bn[^');
define('NONCE_KEY',        '{,]:8h3i(t(IMJsn2<DWv!vdLf!pTGz`SlGhyL(7P0IPx%^}VjV>z1%4W+tGI8!l');
define('AUTH_SALT',        '(sbHg$~>8k!=E#1E,yr[nKLweIG;25v:aRZ<lskH/%*g($ujwac)){yHnElMeex(');
define('SECURE_AUTH_SALT', '.5rUN{xu)Yq[$bo{_}Gd83AEKG8_4Ww=kzOQ3ol$npt%vtx&V|Wl9x4Z;v#Yet5d');
define('LOGGED_IN_SALT',   '2NED}qfDE[&&5:j;sHc%q(gX,Fgf}}I&pGU_%IA=QEN!e,L1W2w@OMY,A<^.4xab');
define('NONCE_SALT',       'n#me~Yo&{4A09/$ALYSlnn>v:0_Oy{Q6G28q})3Qw6KV[Clg%5]qc0GQk%g!Aw08');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpl_';

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

