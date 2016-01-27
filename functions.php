<?php
/**
 *  @package Wordpress
 *  @subpackage sells-pro
 *  @since sells-pro 1.0
 */

function sellspro_setup() {
  add_theme_support( 'custom-header' );
  add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
  add_theme_support( 'post-formats', array( 'gallery', 'image', 'video', 'audio', 'quote', 'link', 'status', 'aside' ) );
  add_theme_support( 'post-thumbnails');
 	add_theme_support( 'title-tag' );
 	register_nav_menus(
 	  array(
 	    'primary' => __( 'Primary Menu' ),
 	    'social' => __( 'Social Menu' )
 	  )
 	);
 }
 add_action( 'after_setup_theme', 'sellspro_setup' );

 function sellspro_widgetspace() {
   register_sidebar( array(
     'name' => 'Footer Widget Space',
     'id' => 'extended-footer',
     'description' => 'Widgets placed here will appear in the footer.'
   ));
 }
 add_action( 'widgets_init', 'sellspro_widgetspace');

 function sellspro_fonts() {
   $fonts_url = '';
  	$fonts     = array();
  	$subsets   = 'latin';
 	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'sousMazin' ) ) {
 		$fonts[] = 'Open Sans:400,400italic,500,600,700,800';
 	}
  	if ( $fonts ) {
      $fonts_url = add_query_arg( array(
        'family' => urlencode( implode( '|', $fonts ) ),
        'subset' => urlencode( $subsets ),
      ), '//fonts.googleapis.com/css' );
   }
   return $fonts_url;
 }

 function sellspro_scripts() {
 	wp_enqueue_style( 'sellspro_style', get_stylesheet_uri(), array(), '20151218' );
  wp_enqueue_style( 'sellspro_fonts', sellspro_fonts(), array(), null );
 	wp_enqueue_style( 'font_awesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" );
 }
 add_action( 'wp_enqueue_scripts', 'sellspro_scripts' );

 if(!is_admin()){
 	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
 	remove_action( 'wp_print_styles', 'print_emoji_styles' );
 	remove_action( 'wp_head', 'wlwmanifest_link' );
 	remove_action( 'wp_head', 'rsd_link' );
 	remove_action( 'wp_head', 'wp_generator' );
 	remove_action( 'wp_head', 'rest_output_link_wp_head' );
 }

 foreach(glob(get_template_directory() . '/includes/*.php') as $includes_file){
 	include_once $includes_file;
 }

 function read_more_box( $more ) {
	return '... </p><div class="readmore">Read More</div>';
}
add_filter('excerpt_more', 'read_more_box');

function sp_aside_text_setting_init() {
	register_setting( 'general', 'sp_aside_text' );
	add_settings_field( 'sp_aside_text', 'Extra Text Displayed in Asides  (sells-pro)', 'sp_aside_text_setting_callback', 'general');
}
add_action( 'admin_init', 'sp_aside_text_setting_init' );
function sp_aside_text_setting_callback(){
	echo '<textarea name="sp_aside_text" id="sp_aside_text" type="text" class="regular-text">' . esc_attr(get_option('sp_aside_text')) . '</textarea> <p class="description">Explanation of what an aside (gratitude) is about!</p>';
}

 ?>
