<?php

/* 
 * Auto Plugin Setup 
 * 
 * This snippet is used to add the following to the theme:
 * 
 *  Request the user tu install the following plugins included in the theme:
 *   - Advanced Custom Fields Pro
 *   - All In One WP Migration, File Extension.
 *   - All In One WP Migration, Unlimited Extension.
 * 
 *  Request to add the following plugins from the WP Plugins page:
 *   - All In One WP Migration
 *   - WebP Express
 *   - WordPress SEO by Yoast
 *   - Contact Form 7
 *   - ACF Rest to WP REST API
 *   - Advanced Contact Form 7
 *   - Duplicate Post
 *   - Wordfence Security
 *   - W3 Total Cache
 * 
 */

 // Adding the Class Plugin Activator
require_once ('inc/theme_plugin_activator/class-tgm-plugin-activation.php');

add_action( 'tgmpa_register', 'moozoom_theme_register_required_plugins' );

	function moozoom_theme_register_required_plugins() {
		$plugins = array(
	
			// Plugins included inside the base theme.
			array(
				'name'               => 'Advanced Custom Fields PRO',
				'slug'               => 'advanced-custom-fields-pro',
				'source'             => LIBS_DIR.'inc/theme_plugin_activator/plugins/advanced-custom-fields-pro.zip',
				'required'           => true,
				'version'            => '',
				'force_activation'   => false,
				'force_deactivation' => false,
				'external_url'       => '', 
				'is_callable'        => '', 
			),
			array(
				'name'               => 'All In One WP Migration File Extension',
				'slug'               => 'all-in-one-wp-migration-file-extension',
				'source'             => LIBS_DIR.'inc/theme_plugin_activator/plugins/all-in-one-wp-migration-file-extension.zip',
				'required'           => false,
			),
			array(
				'name'               => 'All In One WP Migration Unlimited Extension',
				'slug'               => 'all-in-one-wp-migration-unlimited-extension',
				'source'             => LIBS_DIR.'inc/theme_plugin_activator/plugins/all-in-one-wp-migration-unlimited-extension.zip',
				'required'           => false,
			),
			array(
				'name'               => 'WPML Multilingual CMS',
				'slug'               => 'sitepress-multilingual-cms',
				'source'             => LIBS_DIR.'inc/theme_plugin_activator/plugins/sitepress-multilingual-cms.zip',
				'required'           => false,
			),
	
			// Plugins to include from the WordPress Plugin Repository.
			array(
				'name'		=> 'Visual Composer Website Builder',
				'slug'		=> 'visualcomposer',
				'required'	=> false
			),
			array(
				'name'		=> 'WebP Express',
				'slug'		=> 'webp-express',
				'required'	=> false
			),
			array(
				'name'		=> 'WordPress SEO by Yoast',
				'slug'		=> 'wordpress-seo',
				'required'	=> false
			),
			array(
				'name'		=> 'Contact Form 7',
				'slug'		=> 'contact-form-7',
				'required'	=> false
			),
			array(
				'name'		=> 'ACF to REST API',
				'slug'		=> 'acf-to-rest-api',
				'required'	=> false
			),
			array(
				'name'		=> 'Advanced Contact form 7 DB',
				'slug'		=> 'advanced-cf7-db',
				'required'	=> false
			),
			array(
				'name'		=> 'Duplicate Post',
				'slug'		=> 'duplicate-post',
				'required'	=> false,
				'force_activation'	=> true
			),
			array(
				'name'		=> 'Wordfence Security – Firewall & Malware Scan',
				'slug'		=> 'wordfence',
				'required'	=> false,
				'force_activation'	=> true
			),
			array(
				'name'		=> 'W3 Total Cache',
				'slug'		=> 'w3-total-cache',
				'required'	=> false,
				'force_activation'	=> true
			),
			array(
				'name'		=> 'All-in-One WP Migration',
				'slug'		=> 'all-in-one-wp-migration',
				'required'	=> false,
				'force_activation'	=> true
			),

			
	
		);
	
		$config = array(
			'id'           => 'moozoom-theme',             
			'default_path' => '',                      
			'menu'         => 'tgmpa-install-plugins', 
			'parent_slug'  => 'themes.php',            
			'capability'   => 'edit_theme_options',   
			'has_notices'  => true,                   
			'dismissable'  => true,                   
			'dismiss_msg'  => '',                    
			'is_automatic' => true,                  
			'message'      => '',                 
		);
	
		tgmpa( $plugins, $config );
	}
?>