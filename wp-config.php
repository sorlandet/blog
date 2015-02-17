<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

 if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
    include( dirname( __FILE__ ) . '/local-config.php' );
 }

 // ** MySQL settings - You can get this info from your web host ** //
 /** The name of the database for WordPress */
 define('DB_NAME', 'ebdb');
             
 /** MySQL database username */
 define('DB_USER', 'sorlandet');
             
 /** MySQL database password */
 define('DB_PASSWORD', 'CPXWNY8cYYPFSvpC');
             
 /** MySQL hostname */
 define('DB_HOST', 'aa1e9ytc4dybtsg.cxbv7of13ybk.us-east-1.rds.amazonaws.com');
             
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
 define('AUTH_KEY',         'QL4DO??X>T5utjs@Ew-XwSKALvfVzb3nJOI|#m=`+9l0 69|1x>FfTQx+U+R@t;$');
 define('SECURE_AUTH_KEY',  '(qekys6%{#NE7@_FL{?=_ikK9=!@N8lk3:aPuldj~dNnR}[Ewng9jSRy5@t pmzk');
 define('LOGGED_IN_KEY',    'LX:1|w@;* Efm<wH:W%RHuqnRTur7#Tyk,<]w=0Kh{zTlKayUHXEdni6B#C81MVW');
 define('NONCE_KEY',        '4B+;%&~:evzd4CJ!U(>C^m+i.fOK|E%He8Nj]SO,FJ4W5t2A>-I[Rz3*H*NIITyu');
 define('AUTH_SALT',        'XhWp|7$r,r~rco&/b0|!<=|C?([k,[%r`Z_It33Kt2+>$FI3U2&~=)Pie&M?de;*');
 define('SECURE_AUTH_SALT', 'ixO`rq#roBa9z %lnh~b|zS{80H#QqJn!8]W`I(4Xq|q3c@2-@S47pLEQ5fgZ)_w');
 define('LOGGED_IN_SALT',   'vIw[E9]<=AAAxdE]y-~Y2EOs(RjAZ~_zq|!r0gCjqxk)!M?=<qxm6]_j+ T_x yj');
 define('NONCE_SALT',       ',VJ]cSB[ED;%?lWe`~|o1(P{e@|PF3o^O-FAT^=MLW&GPX{4Ud%aXpGHG| 7wkc4');
         
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
