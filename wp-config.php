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
define('DB_NAME', 'Joury-store_db');

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
define('AUTH_KEY',         'e66f&3BdXhQ`]!NeDcq.}Ej,Tak[QFq%Tof)O{A#YaG*u$!ULzb33G.}<gk&5MDv');
define('SECURE_AUTH_KEY',  'Q;$~BG,Xs0g;~r}?xI&U[^Qbtq~;on Wt@>S`5qOWG%>>BE9@dNR0#D60X3n/m*u');
define('LOGGED_IN_KEY',    'Hvs~u?b*QATkw]R]WW)!bPPlwSdxW*Hfuyd7[<61BpQ8wxD7t>=jn~hQ$ksz#PD^');
define('NONCE_KEY',        'sZT`S_Ebo+bP-~;@c@>[-;=Z{=SaQ[0!bEOb:aUq05?-j@zF.QVc@%>.bJF{aG@?');
define('AUTH_SALT',        '{Ca#Mc0qinZw6NCFC_6iq|p1|Wh[|Q+A(/Gu$u :+f8IO.Lu8Xy-u1[Dtg4~7FIJ');
define('SECURE_AUTH_SALT', '{CL@NLwiSvXUf_tn!+M^l5iODNaWY~*`OyYo6.NH?N1A};%JXLL{xMS6]xFTc43{');
define('LOGGED_IN_SALT',   ' @aM,aZ/9W:AhZQZ>tISn&pme4>nUHl`V*U];%&Av2l0G1J~5t gq1aK8Q`{Brv>');
define('NONCE_SALT',       'gvwkL1<(*$dTnm~jS@Wd0Ht;b}A7:$tt?B1F/_e|jB!WAq`b)2.CderP0s^nW(Q5');

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
