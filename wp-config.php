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

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */



// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', 'cvcom_db1' );



/** MySQL database username */

define( 'DB_USER', 'cvcom_db' );



/** MySQL database password */

define( 'DB_PASSWORD', 'ZZZ_top512' );



/** MySQL hostname */

define( 'DB_HOST', 'localhost' );



/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );



/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );

define( 'WP_AUTO_UPDATE_CORE', false );

/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         '%g=+$gPL$jk:17CF^.9X-PGwl/au?x&ao}01$pu`_|xo`E+Q9um=gv(+T9GII;[.' );

define( 'SECURE_AUTH_KEY',  '4e:xAUZjYrvVf(3U=nHGCotk9:_< ++zF}^:=)n(_}p=ACjLa/LDp^y?9xAdW@,=' );

define( 'LOGGED_IN_KEY',    '/FMCR1]W0J|fE!@3wbCUXP:[EYYtDJ~;Z)hFN#3biKva~_~sI%;?2h)~JN;kYjqS' );

define( 'NONCE_KEY',        '7/WH=|fC?TE**d5 }ERl^$SWO8WhxVpMvf@>i8B8yQ@N6R=lr:l`QTU[yhLwE@ X' );

define( 'AUTH_SALT',        '9EL9co,m!G/8MvQsUtyS3o=c(6r+[X<>1.RV8~jro5_FBJTm~iHyK,/=E!$RnDMA' );

define( 'SECURE_AUTH_SALT', 'W0!d=ril^p:J=!u<Hi*v?>,=W{p]$0>CWQ?[TKX1.Kdys4]~3H#@Aud$%dm1K~Cb' );

define( 'LOGGED_IN_SALT',   '&{^#I7PBZ=Ba]OAu`eOj&8JhM.6@.|@!Iv^J%vBNN]AgW-:%eF 08Nea|gBX5>AY' );

define( 'NONCE_SALT',       'u/B}o[&w)U>:Jd>;Q6Tat=cT5.OICt}?oq_e=0dpm7v8HAL~j><M7xjBvwGY;m:7' );



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

 * visit the documentation.

 *

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );



/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}



/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

