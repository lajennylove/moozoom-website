<?php 


/**
 * Function to get hero component elements.
 *
 * @param string receive the Post ID
 *
 * @return object with pill, content_background, mobile_background, title, subtitle, button_call_to_action, button_link, button_disclaimer and background.
 */
function get_hero( $post_id ) {

	// Getting the attachment_image_src from the thumbnail with the post ID
	$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'full' );

	// If the thumbnail is not empty get the image src
	if ( $thumbnail_src ) $hero_background = esc_url( $thumbnail_src[0] );
	else $hero_background = esc_url(  THEME_URI . '/dist/images/img_header_english.jpg' );

	// Creating the object with the hero component elements
	$vars = new StdClass();
	$vars->pill = get_field( 'pill', $post_id );
	$content_background = get_field('content_background', $post_id);
	$vars->content_background = $content_background["url"];
	$mobile_background = get_field('mobile_background', $post_id);
	$vars->mobile_background = $mobile_background["url"];
	$vars->title = get_field('title', $post_id);
	$vars->subtitle = get_field('subtitle', $post_id);
	$vars->button_call_to_action = get_field('button_call_to_action', $post_id);
	$vars->button_link = get_field('button_link', $post_id);
	$vars->button_disclaimer = get_field('button_disclaimer', $post_id);
	$vars->background = $hero_background;
	$video = get_field('video', $post_id);
	$vars->video = $video['url'];

	return $vars;

}

// Rewrite url for video single page
add_filter('query_vars', 'add_videoid', 0, 1);
function add_videoid($vars){
    $vars[] = 'videoid';
    return $vars;
}

add_rewrite_rule('^videos/([^/]+)/?$','index.php?pagename=videos&videoid=$matches[1]','top');


// Slugify function
function slugify($text, string $divider = '-') {
	// replace non letter or digits by divider
	$text = preg_replace('~[^\pL\d]+~u', $divider, $text);
  
	// transliterate
	$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  
	// remove unwanted characters
	$text = preg_replace('~[^-\w]+~', '', $text);
  
	// trim
	$text = trim($text, $divider);
  
	// remove duplicate divider
	$text = preg_replace('~-+~', $divider, $text);
  
	// lowercase
	$text = strtolower($text);
  
	if (empty($text)) {
	  return 'n-a';
	}
  
	return $text;
  }

  add_action('admin_init', 'my_general_section');  
  function my_general_section() {  
	  add_settings_section(  
		  'my_settings_section', // Section ID 
		  'App Settings', // Section Title
		  'my_section_options_callback', // Callback
		  'general' // What Page?  This makes the section show up on the General Settings Page
	  );
	  
	  add_settings_field( // Option 1
		  'option_1', // Option ID
		  'App EN', // Label
		  'my_textbox_callback', // !important - This is where the args go!
		  'general', // Page it will be displayed (General Settings)
		  'my_settings_section', // Name of our section
		  array( // The $args
			  'option_1' // Should match Option ID
		  )  
	  ); 
	  
	  add_settings_field( // Option 2
		  'option_2', // Option ID
		  'App FR', // Label
		  'my_textbox_callback', // !important - This is where the args go!
		  'general', // Page it will be displayed
		  'my_settings_section', // Name of our section (General Settings)
		  array( // The $args
			  'option_2' // Should match Option ID
		  )  
	  );
	  
	  add_settings_field( // Option 3
		  'option_3', // Option ID
		  'Calendly Follow Up EN', // Label
		  'my_textbox_callback', // !important - This is where the args go!
		  'general', // Page it will be displayed
		  'my_settings_section', // Name of our section (General Settings)
		  array( // The $args
			  'option_3' // Should match Option ID
		  )
	  );

	  add_settings_field( // Option 4
		  'option_4', // Option ID
		  'Calendly Follow Up FR', // Label
		  'my_textbox_callback', // !important - This is where the args go!
		  'general', // Page it will be displayed
		  'my_settings_section', // Name of our section (General Settings)
		  array( // The $args
			  'option_4' // Should match Option ID
		  )
	);
	  
	  register_setting('general','option_1', 'esc_attr');
	  register_setting('general','option_2', 'esc_attr');
	  register_setting('general','option_3', 'esc_attr');
	  register_setting('general','option_4', 'esc_attr');
  }
  
  function my_section_options_callback() { // Section Callback
	  echo "<p>Please add the moozoom's app's entry point.</p>";  
  }
  
  function my_textbox_callback($args) {  // Textbox Callback
	  $option = get_option($args[0]);
	  echo '<input placeholder="" type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" size="50" />';
  }