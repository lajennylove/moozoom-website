<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define( 'DB_NAME', 'moozoom_website' );

/** Database username */
define( 'DB_USER', 'moozoom' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'gh}}eQN(@xGd*r<UY:2R1f>AV!svsFlu1FHXI37yI7Iuy}+8?N.Z{(O*IyLG?RyE' );
define( 'SECURE_AUTH_KEY',  'XMN&h9~Oq1rr9[YVqq-uH2dEQ/+#jEf`2+DLxY%&%kfk+dz| }zNC4j}{12v,l$G' );
define( 'LOGGED_IN_KEY',    '~;Lw21E|vAA(=XAdku=WF<O=WI~Pr>3BgY5znH,DC7:&KpTO=&7nVIScLHcDOp9O' );
define( 'NONCE_KEY',        '!{3TP;N8v&8#g; <+|iyy 9(,ZfOnk9H?X_k<7Wgg-<i-8&`}w3HSHW8rSQub)%8' );
define( 'AUTH_SALT',        'b%IMA#+IzYi) l2[A!,)2@&`-E9_t]vW!M^7-(!&Gegx5&QB6&]|cNYpoxG,,UQv' );
define( 'SECURE_AUTH_SALT', 'BhmaEs26{C{I>MDBdOI[({>[<+]8v/CqHZ,.Xzf)N$}kZHuXE}UzU1^Smb$XWVZ:' );
define( 'LOGGED_IN_SALT',   '8mu1)*tEmd`q+;{Y>$F_ozRC0@~1[U!&<i/+a$uUdp`+Z&8Q0F=2D.bA%InDd5k]' );
define( 'NONCE_SALT',       'V&nQZAl+o0KYs[a~VgkHWmmO{WkoA,KO9dWPryR!_NNUe<C&O-Hb5:DQ*m4fkrl4' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */
define('ALLOW_UNFILTERED_UPLOADS', true);

/* Memory Limit */
/* WP Memory Limit */
define('WP_MEMORY_LIMIT', '512M');
define( 'WP_MAX_MEMORY_LIMIT', '512M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
