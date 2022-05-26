<?php
/**
 * Theme supports
 * 
 */

function moozoom_setup() {
	
	// Adding theme support for html5
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
	
    // Registering theme's menu areas
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'Primary tailpress' ),
			'secondary' => __( 'Secondary Menu', 'Secondary tailpress' ),
			'tertiary' => __( 'Tertiary Menu', 'Tertiary tailpress' ),
		)
	);

	add_theme_support( 'menus' );

    // Adding theme support for Title Tag.
    add_theme_support( 'title-tag' );

    // Adding theme support for Custom Logo.
    add_theme_support( 'custom-logo' );

    // Adding theme support for post thumbnails.
	add_theme_support( 'post-thumbnails' );

    // Adding theme support for post formats.
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat' ) );

    // Adding theme support for align-wide.
	add_theme_support( 'align-wide' );

    // Adding theme support for wp-block-styles.
	add_theme_support( 'wp-block-styles' );

    // Adding theme support for editor styles.
	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'moozoom_setup' );

// Adding theme support for SVGs
function svg_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	$mimes['svgz'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'svg_mime_types');