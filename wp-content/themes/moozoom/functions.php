<?php
/**
 * Theme Functions
 *
 * @package MooZoom
 * @author Valentin Lancu / Jenny Martinez
 * @link https://moozoomapp.com
 * 
 */

/**
 * Theme Directory Paths 
 * THEME_DIR - The theme absolute local directory
 * THEME_URL - The theme absolute url
 */
define( 'THEME_DIR', get_template_directory() );
define( 'THEME_URI', get_template_directory_uri() );

/**
 * Theme Library Paths
 * LIB_DIR - The library absolute local directory
 * LIB_URL - The library absolute url
 */
define( 'LIBS_DIR', THEME_DIR. '/functions/' );
define( 'LIBS_URI', THEME_URI. '/functions/' );

/**
 * Includes
 *
 * The $moozoom_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 * 
 * @param array $moozoom_includes file names to include
 * @return array 
 *
 */
function moozoom_includes( $include ) {
	// Verifing the include is an array
	if( !is_array( $include ) ) $include = array( $include );

	// Looping through the includes  locate_template($file)
	foreach ($include as $file) {
		
		// Locate the file
		if ( !$filepath = LIBS_DIR.$file ) trigger_error(sprintf(__('Error locating %s for inclusion', 'nylon'), $file), E_USER_ERROR);
		
		// Requiring every single include
		require_once $filepath;
	}
}

// Creating the includes array
$moozoom_includes = array(
	'autoplugins.php',			// Autoplugin installations
	//'blocks.php',				// Block Register
	'custom-post-types.php',	// Custom Post Types
	'custom-functions.php',		// Custom Functions
	'init.php',					// Initial theme setup and constants
	'menus.php',				// Removing unneeded WP defaults
	//'optional.php',			// Optional Settings
	//'options.php',			// ACF Theme Options 
	'removes.php',				// Removes default WordPress elements
	'scripts.php',				// Scripts and stylesheets
	//'security.php',			// Security focused settings
	'shortcodes.php',			// Add Shortcodes
	//'sidebars.php',			// Configure Sidebars
	'supports.php',				// Theme Supports	
);

// Trigger the includes functions
moozoom_includes( $moozoom_includes );