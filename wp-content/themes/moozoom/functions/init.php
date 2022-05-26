<?php
/*
 * Initialize the theme
 * 
 * 
 * 
 * 
 */

// If a new data group is saved in ACF, save all fields into Json file
add_filter('acf/settings/save_json', 'moozoom_json_save');
function moozoom_json_save( $path ) {
        
        // update path
        $path = LIBS_DIR . 'acf-json'; 
        
        // return
        return $path;    
}

// If ACF is installed, load all fields from Json file
add_filter('acf/settings/load_json', 'moozoom_json_load');
function moozoom_json_load( $paths ) {
        
        // remove original path (optional)
        unset($paths[0]);
        
        // append path
        $paths[] = LIBS_DIR . 'acf-json';
        
        // return
        return $paths;
}