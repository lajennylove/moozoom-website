<?php
/*
 * Theme Shortcodes
 *
 *
 */

// moozoom video shortcode [vimeo id="584260411"]
function moozoomVimeoModal( $atts ) {
   $a = shortcode_atts( array(
        'id' => '670129978',
    ), $atts );

    ob_start();
    get_template_part( 'template-parts/header', 'modalvimeo', array('id' => $a['id'] ) ); 
    return ob_get_clean(); 
}
add_shortcode( 'vimeo', 'moozoomVimeoModal' );

// create a shorcode to display the home_url
function moozoomHomeUrl() {
    return home_url();
}
add_shortcode( 'home_url', 'moozoomHomeUrl' );

// add shortcode to show ACF repeaters for Videos
function showVideoPreviews( $atts ){

    ob_start();
    get_template_part( 'template-parts/explore', $atts['model'] ); 
    return ob_get_clean(); 
}
add_shortcode( 'showVideoPreviews', 'showVideoPreviews' );

function calendlyen() { 
    ob_start(); ?> onclick="Calendly.initPopupWidget({url: '<?=get_option('option_3'); ?>'});return false;" <?php return ob_get_clean();
}
add_shortcode( 'calendlyen', 'calendlyen' );

function calendlyfr() { 
    ob_start(); ?> onclick="Calendly.initPopupWidget({url: '<?=get_option('option_4'); ?>'});return false;" <?php return ob_get_clean();
}
add_shortcode( 'calendlyfr', 'calendlyfr' );