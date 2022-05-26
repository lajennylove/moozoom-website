<?php

/**
 * Enqueue theme assets.
 */
function moozoom_enqueue_scripts() {
	$theme = wp_get_theme();
	wp_enqueue_style( 'tailpress', moozoom_asset( 'dist/css/app.css', array(), $theme->get( 'Version' ) ) );
	wp_enqueue_script('siema', 'https://pawelgrzybek.github.io/siema/assets/siema.min.js', array(), '', true);
	wp_enqueue_script( 'tailpress', moozoom_asset( 'dist/js/app.js' ), array(), $theme->get( 'Version' ), true );
}

// Sending the home_url to the front end
wp_register_script( 'my-global-vars', '', array("jquery"), '', true );
wp_enqueue_script( 'my-global-vars'  );
wp_add_inline_script( 'my-global-vars', 'const site = ' . json_encode( array(
    'theme_path' => get_template_directory_uri(),
    'home_url' => home_url(),
	'main_home' => get_site_url(),
) ) );

add_action( 'wp_enqueue_scripts', 'moozoom_enqueue_scripts' );

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function moozoom_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return THEME_URI . '/' . $path;
	}

	return add_query_arg( 'time', time(),  THEME_URI . '/' . $path );
}