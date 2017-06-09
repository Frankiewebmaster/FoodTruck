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
define('DB_NAME', 'foodtruck');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '*F=44oK%yKLDYj5DcqpaaR|n7nvo,-n6hHXWb~Vvk|SW4ne$xR<3v`Qzdoyz^>(4');
define('SECURE_AUTH_KEY',  'W})8sl7(t98MG1O8cvjzQ3+;.,gR_WV&y7~x#QP%}c:MkYEw44+;@u]>VD!~b@gB');
define('LOGGED_IN_KEY',    '4>t&:]x7n<hupi,bf1iC,[RP$q1`#4E0]jlm/]c :@Imuted|X?OmZ_qk?RtLQL:');
define('NONCE_KEY',        'UOGTAvcn0$<Xy|3-%ExOto~Q~G.7%[=XQM<p8!ZlQS3_bAXg#&JJ-PMD~_ BH6}?');
define('AUTH_SALT',        'eX&=2gI/VqQt+*{jELt#q!]r56jf46?_2iFU%1 VCB>wz]iOHo_08}i/traXE75W');
define('SECURE_AUTH_SALT', '$P)8-<K<cZQq:Nj{;xjCSL63k*bJDHsD{VnRE2u*mLb7,^s1~.S<:bngsvR*{CMM');
define('LOGGED_IN_SALT',   '_w9#B^,}oy:Pm*`=lK;l8: C5o]Z2/a5c<Ryh9]VILt?0{?qg;VXEMNZW/RIsq,B');
define('NONCE_SALT',       ':}[;,ra*aaJ;Ihh^:>YFg}Jap8?/t!1DyJE;3W>^z(MjnkBw9`H=O~FoC?}:b*We');

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
