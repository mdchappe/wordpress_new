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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'z3SKwWtXin_[}~g[B-|t ^^];+f-:jom>].Z-=T|FpD^xMq-z96bl:Ck+[S,OE1!');
define('SECURE_AUTH_KEY',  'JImvSm6q$JB@ux<o7]w[cf$X(}%s?Hb?l1L_pv1r+zx@xJS^?Xj<j|@Tx+XUl^B6');
define('LOGGED_IN_KEY',    '4;Ux^NI=xux2-_;_t?rLWVhrBIia*D{8n>PPDj) k-Me(M|Fp+,o-I3UI>fz8=mD');
define('NONCE_KEY',        'tw2Su>v^py6@GSUcG#b7LvgTfd;3_tCvufzSHH<&t1%K?@bxx0K,+/Y=w%1#!z*i');
define('AUTH_SALT',        'KANc0SJ|4!tiHE6}#epbOL5hxCfo09A/FjyejGc,.?*zEuq]L0f%v9CFNBQ{fbw[');
define('SECURE_AUTH_SALT', 'j-OF/5i$wN$TN,V*S5AzxqD=X}D4|T4~bW4fSJq,^8b8ZPpNp0-EXA[[cntm]/Nj');
define('LOGGED_IN_SALT',   'Put>LmtOySvy#lO.`B{#qL/n,4Gbxee2):<5@9$|7zv#i^rUz+n+Q_pu+t~-u`@|');
define('NONCE_SALT',       'lIbOFH|#18r.7+<+vbC6-k})j>|&rbbc-m r.kIWn7s~NfAqfF*}(Fl8HX4h=@Jj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
