<?php
  add_action( 'after_setup_theme', 'blankslate_setup' );

  function blankslate_setup() {
    load_theme_textdomain( 'fresh', get_template_directory() . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );

    global $content_width;
    if ( ! isset( $content_width ) ) $content_width = 640;

    register_nav_menus( array( 'main-menu' => __( 'Main Menu', 'blankslate' ) ) );
  }

  add_filter( 'the_title', 'blankslate_title' );

  function blankslate_title( $title ) {
    if ( $title == '' ) {
      return '&rarr;';
    } else {
      return $title;
    }
  }




// function css_attr_filter($var) {
//     return is_array($var) ? array() : '';
// }

function remove_admin_bar() {
  return false;
}


function add_javascript() {
  wp_register_script( 'js', get_template_directory_uri() . '/js/main.js', array(), '1.0.1');
  wp_enqueue_script('js');
}
add_action('init', 'add_javascript');

// add_filter('nav_menu_css_class', 'css_attr_filter', 100, 1);
// add_filter('nav_menu_item_id', 'css_attr_filter', 100, 1);
// add_filter('page_css_class', 'css_attr_filter', 100, 1);

add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar




// ------------------------------------------------------------------
 // Add all your sections, fields and settings during admin_init
 // ------------------------------------------------------------------
 //

 function eg_settings_api_init() {
 	// Add the section to reading settings so we can add our
 	// fields to it
 	add_settings_section(
		'eg_setting_section',
		'Example settings section in reading',
		'eg_setting_section_callback_function',
		'reading'
	);

 	// Add the field with the names and function to use for our new
 	// settings, put it in our new section
 	add_settings_field(
		'eg_setting_name',
		'Example setting Name',
		'eg_setting_callback_function',
		'reading',
		'eg_setting_section'
	);

 	// Register our setting so that $_POST handling is done for us and
 	// our callback function just has to echo the <input>
 	register_setting( 'reading', 'eg_setting_name' );
 } // eg_settings_api_init()

 add_action( 'admin_init', 'eg_settings_api_init' );


 // ------------------------------------------------------------------
 // Settings section callback function
 // ------------------------------------------------------------------
 //
 // This function is needed if we added a new section. This function
 // will be run at the start of our section
 //

 function eg_setting_section_callback_function() {
 	echo '<p>Intro text for our settings section</p>';
 }

 // ------------------------------------------------------------------
 // Callback function for our example setting
 // ------------------------------------------------------------------
 //
 // creates a checkbox true/false option. Other types are surely possible
 //

 function eg_setting_callback_function() {
 	echo '<input name="eg_setting_name" id="eg_setting_name" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'eg_setting_name' ), false ) . ' /> Explanation text';
 }
