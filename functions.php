<?php

// ITEM THUMBNAIL 
function gs_item_thumbnails() {
	global $post;
	$post_id = $post->ID;
	//$parent_id = $post->post_parent;	
		if(mfi_reloaded_has_image('first-image', $post_id = null) == true){
						 $headerBackground = mfi_reloaded_get_image('first-image', $size = '', $post_id = null, $attributes = array());
						 $mfi = mfi_reloaded_get_image_id($post_id = null);
						 //var_dump($mfi);
						 $image_information = wp_get_attachment_image_src(mfi_reloaded_get_image_id('first-image', $post_id = null));
						 $image = $image_information[0];
						 $image = explode('-150x150',$image);
						 $tt = $image[0].'.jpg';
						 echo '<a class="secondary-item-image item-thumbnail col-lg-3 col-md-3" href="#" data-image="'. $tt .'" data-zoom-image="'. $tt .'">'. $headerBackground .'</a>';
					     
		}	
		if(mfi_reloaded_has_image('second-image', $post_id = null) == true){
						 $headerBackground = mfi_reloaded_get_image('second-image', $size = '', $post_id = null, $attributes = array());
						 echo '<div class="secondary-item-image item-thumbnail col-lg-3 col-md-3">' . $headerBackground .'</div>';
		}
		if(mfi_reloaded_has_image('third-image', $post_id = null) == true){
						 $headerBackground = mfi_reloaded_get_image('third-image', $size = '', $post_id = null, $attributes = array());
						 echo '<div class="secondary-item-image item-thumbnail col-lg-3 col-md-3">' . $headerBackground .'</div>';
		}
		if(mfi_reloaded_has_image('four-image', $post_id = null) == true){
						 $headerBackground = mfi_reloaded_get_image('four-image', $size = '', $post_id = null, $attributes = array());
						 echo '<div class="secondary-item-image item-thumbnail col-lg-3 col-md-3">' . $headerBackground .'</div>';
		}
}
	
// ADD IMAGE PICKERS
// Image Pickers for 2 of Images header image and background image
	add_action('after_setup_theme', 'register_custom_image_pickers');
	function register_custom_image_pickers() {
		add_theme_support('mfi-reloaded', array(
			'first-image' => array(
				'post_types' => array('bridal','evening'),
				'labels' => array(
					'name' => __('Gallery Img 1'),
					'set' => __('Set Header Background'),
					'remove' => __('Remove Header Background'),
					'popup_title' => __('Set Header Background'),
					'popup_select' => __('Set Header Background'),
				),
			),
			'second-image' => array(
				'post_types' => array('bridal','evening'),
				'labels' => array(
					'name' => __('Gallery Img 2'),
					'set' => __('Set Header image'),
					'remove' => __('Remove Header image'),
					'popup_title' => __('Set Header Image'),
					'popup_select' => __('Set Header image'),
				),
			),
			'third-image' => array(
				'post_types' => array('bridal','evening'),
				'labels' => array(
					'name' => __('Gallery Img 3'),
					'set' => __('Set Header image'),
					'remove' => __('Remove Header image'),
					'popup_title' => __('Set Header Image'),
					'popup_select' => __('Set Header image'),
				),
			),
			'four-image' => array(
				'post_types' => array('bridal','evening'),
				'labels' => array(
					'name' => __('Gallery Img 4'),
					'set' => __('Set Header image'),
					'remove' => __('Remove Header image'),
					'popup_title' => __('Set Header Image'),
					'popup_select' => __('Set Header image'),
				),
			),
		));
	}

add_image_size('featured_image', 55, 55, true);
// GET FEATURED IMAGE
function ST4_get_featured_image($post_ID) {
    $post_thumbnail_id = get_post_thumbnail_id($post_ID);
    if ($post_thumbnail_id) {
        $post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'featured_image');
        return $post_thumbnail_img[0];
    }
}

// ADD NEW COLUMN
function ST4_columns_head($defaults) {
    $defaults['featured_image'] = 'Featured Image';
    return $defaults;
}
 
// SHOW THE FEATURED IMAGE
function ST4_columns_content($column_name, $post_ID) {
    if ($column_name == 'featured_image') {
        $post_featured_image = ST4_get_featured_image($post_ID);
        if ($post_featured_image) {
            echo '<div style="height:55px; width:55px;"><img src="' . $post_featured_image . '" style="height:55px; width:55px;" /></div>';
        }
    }
}
add_filter('manage_posts_columns', 'ST4_columns_head');
add_action('manage_posts_custom_column', 'ST4_columns_content', 10, 2);

add_action( 'wp_enqueue_scripts', 'gs_framework_enqueue_style' );
function gs_framework_enqueue_style() {
	wp_enqueue_style( 'core', get_stylesheet_uri(), false );
        //wp_enqueue_script( 'effects-script', includes_url() . 'js/jquery/ui/effect-bounce.min.js', array(), '1.3' , false );
        wp_enqueue_script( 'easing-script', get_template_directory_uri() . '/settings/js/jquery.easing.1.3.js', array(), '1.3' , false );
        wp_enqueue_script( 'jkit-script', get_template_directory_uri() . '/settings/js/jquery.jkit.1.2.16.min.js', array(), '1.2.16' , false );
	//wp_enqueue_script( 'jkit-plugin', get_template_directory_uri() . '/settings/js/plugin.min.js', array(), '1.2.16' , false );
	wp_enqueue_script( 'jkit-zoom', get_template_directory_uri() . '/settings/js/jquery.elevatezoom.js', array(), '1.2.16' , false );
        wp_enqueue_script( 'settings-script', get_template_directory_uri() . '/settings/js/settings.js', array(), '3.3.5' , false );      
}
//
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

add_action( 'after_setup_theme', 'gs_framework_setup' );
if ( ! function_exists( 'gs_framework_setup' ) ) :
function gs_framework_setup() {
        // 
        register_nav_menus( array(
		'primary' 	=> __( 'Primary Menu', 'gs_framework' ),
		'top-menu'  => __( 'Top Menu', 'gs_framework' ),
		'social'    => __( 'Social Links Menu', 'gs_framework' ),
		
	) );
	/*
	* Makes plugins and themes the opportunity to change original title
	*/
	add_theme_support('title-tag');
	/*
	* Set Support html5 to that elements
	*/
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	 /*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat') );
	/*
	* Set post thumbnails in post, page, and custom post type
	*/
	add_theme_support( 'post-thumbnails' );
	//add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
	//add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
	//add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies
	
	//$color_scheme  = twentyfifteen_get_color_scheme();
	//$default_color = trim( $color_scheme[0], '#' );
	
	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'gs_framework_custom_background_args', array(
		//'default-color'      => $default_color,
		'default-attachment' => 'fixed',
		'background-size'	 => 'contain',
		'description' => '',
                'priority' => 1,
	) ) );
	
	$defaults = array(
		'default-image'          => '',
		'random-default'         => false,
		'width'                  => 1980,
		'height'                 => 500,
		'flex-height'            => true,
		'flex-width'             => true,
		'default-text-color'     => '',
		'header-text'            => true,
		'uploads'                => true,
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-header', $defaults );
	
	 /**
	 * Customizer additions.
	 *
	 * @since gs_framework 1.0
	 */
		require get_template_directory() . '/admin/theme-settings.php';
	 }
endif; // gs_framework_setup


/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since gs_framework 1.0
 */
function gs_framework_widgets_init() {
        register_sidebar( array(
		'name'          => __( 'Header Social', 'gs_framework' ),
		'id'            => 'sidebar-0',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s col-lg-1 col-md-2 col-sm-2 col-xs-2">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Hot Sales', 'gs_framework' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Bridal Dress Collections', 'gs_framework' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Evening Dress Collection', 'gs_framework' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        
        register_sidebar( array(
		'name'          => __( 'Contact Form Main Page', 'gs_framework' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        
        register_sidebar( array(
		'name'          => __( 'About Us', 'gs_framework' ),
		'id'            => 'sidebar-5',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        
        register_sidebar( array(
		'name'          => __( 'Recent Tags', 'gs_framework' ),
		'id'            => 'sidebar-6',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        
        register_sidebar( array(
		'name'          => __( 'Contact Details & Newslater', 'gs_framework' ),
		'id'            => 'sidebar-7',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	    register_sidebar( array(
		'name'          => __( 'Footer Map', 'gs_framework' ),
		'id'            => 'sidebar-8',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gs_framework_widgets_init' );
   
// Get options And set widgets
    $option = get_option('gs_framework_theme_options');
    if(!empty($option['callus_icon_uploader'])){
        require get_template_directory() . '/admin/callus-widget.php';
    }
    if(!empty($option['facebook_icon_uploader'])){
        require get_template_directory() . '/admin/facebook-widget.php';
    }
    if(!empty($option['twitter_icon_uploader'])){
        require get_template_directory() . '/admin/twitter-widget.php';
    }
    if(!empty($option['youtube_icon_uploader'])){
        require get_template_directory() . '/admin/youtube-widget.php';
    }
	
// Get Item Condition
function gs_get_item_condition(){
	global $post;
	if(get_metadata('post', $post->ID, 'more_info_radio', '')){
					$condition = get_metadata('post', $post->ID, 'more_info_radio', '');
					
					if($condition[0] == 'new'):
						$condition[0] = '<div class="condition '.$condition[0].'"></div>';
					elseif($condition[0] == 'sale'):
						$condition[0] = '<div class="condition '.$condition[0].'"></div>';
					elseif($condition[0] == 'hit'):
						$condition[0] = '<div class="condition '.$condition[0].'"></div>';
					elseif($condition[0] == 'hot'):
						$condition[0] = '<div class="condition '.$condition[0].'"></div>';
					else:
						//$condition[0] = 'no condition';
					endif;
					echo $condition[0];
	};	
}
function gs_get_item_color(){
	global $post;
	$color1 = get_metadata('post', $post, 'more_details_meta_color1', '');
	$color2 = get_metadata('post', $post, 'more_details_meta_color2', '');
	
	if(!empty($color1[0])){
		echo '<div class="color-cube" style="background:'.$color1[0].'; padding:10px 20px; width:7%; border:1px solid #c1c1c1;"></div>';
	};
	if(!empty($color2[0])){
		echo '<div class="color-cube" style="background:'.$color2[0].'; padding:10px 20px; width:7%; border:1px solid #c1c1c1;"></div>';
	};
}
	
//function gs_breadcrumbs(){
	//global $post;
	//$serv = $_SERVER;
		//var_dump($serv);
//$menu_name = 'top-menu';

//if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
	//$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

	//$menu_items = wp_get_nav_menu_items($menu->term_id);
//}
//echo $menu_list	;
//}	
//gs_breadcrumbs();

/* START BS STYLES AND SCRIPTS */

	//If you don't already have the Bootstrap CSS and Javascript included then use the 2 functions below to add them to your theme. They are loaded from the NetDNA CDN servers so they load superfast.
	
	function enqueue_my_scripts() {
	//wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array('jquery'), '1.9.1', true); // we need the jquery library
	wp_enqueue_script( 'bootstrap-js', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js', array('jquery'), true); // all the bootstrap javascript goodness
	}
	add_action('wp_enqueue_scripts', 'enqueue_my_scripts');
	function enqueue_my_styles() {
	//wp_enqueue_style( 'bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' );
	//wp_enqueue_style( 'roger', get_template_directory_uri() . '/style.css');
	}
	add_action('wp_enqueue_scripts', 'enqueue_my_styles');
	
	/* END  BS STYLES AND SCRIPTS */
	// Register Custom Navigation Walker
	require_once get_template_directory() . '/settings/menu/wp_bootstrap_navwalker.php';  





function my_awesome_image_resize_dimensions( $payload, $orig_w, $orig_h, $dest_w, $dest_h, $crop ){

	// Change this to a conditional that decides whether you 
	// want to override the defaults for this image or not.
	if( false )
		return $payload;

	if ( $crop ) {
		// crop the largest possible portion of the original image that we can size to $dest_w x $dest_h
		$aspect_ratio = $orig_w / $orig_h;
		$new_w = min($dest_w, $orig_w);
		$new_h = min($dest_h, $orig_h);

		if ( !$new_w ) {
			$new_w = intval($new_h * $aspect_ratio);
		}

		if ( !$new_h ) {
			$new_h = intval($new_w / $aspect_ratio);
		}

		$size_ratio = max($new_w / $orig_w, $new_h / $orig_h);

		$crop_w = round($new_w / $size_ratio);
		$crop_h = round($new_h / $size_ratio);

		$s_x = 0; // [[ formerly ]] ==> floor( ($orig_w - $crop_w) / 2 );
		$s_y = 0; // [[ formerly ]] ==> floor( ($orig_h - $crop_h) / 2 );
	} else {
		// don't crop, just resize using $dest_w x $dest_h as a maximum bounding box
		$crop_w = $orig_w;
		$crop_h = $orig_h;

		$s_x = 0;
		$s_y = -250;

		list( $new_w, $new_h ) = wp_constrain_dimensions( $orig_w, $orig_h, $dest_w, $dest_h );
	}

	// if the resulting image would be the same size or larger we don't want to resize it
	if ( $new_w >= $orig_w && $new_h >= $orig_h )
		return false;

	// the return array matches the parameters to imagecopyresampled()
	// int dst_x, int dst_y, int src_x, int src_y, int dst_w, int dst_h, int src_w, int src_h
	return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );

}
add_filter( 'image_resize_dimensions', 'my_awesome_image_resize_dimensions', 10, 6 );

// add shortcode support in textwidgets	
add_filter( 'widget_text', 'do_shortcode' );

// Mautic custom form
add_shortcode('mautic_big_form','gs_mautic_form_shortcode');
function gs_mautic_form_shortcode(){
	$html = '
	
	<div class="form-wrapper">
		<div id="mauticform_wrapper_salonsabinacoilbfhehomepage" class="mauticform_wrapper">
		<form autocomplete="false" role="form" method="post" action="http://apps.gsolution.co.il/mautic/form/submit?formId=23" id="mauticform_salonsabinacoilbfhehomepage" data-mautic-form="salonsabinacoilbfhehomepage">
			<div class="mauticform-error" id="mauticform_salonsabinacoilbfhehomepage_error"></div>
			<div class="mauticform-message" id="mauticform_salonsabinacoilbfhehomepage_message"></div>
			<div class="mauticform-innerform">
			
				<div id="contentRight" class="col-md-12">
						<div id="mauticform_salonsabinacoilbfhehomepage_fname"  data-validate="fname" data-validation-type="text" class="mauticform-row mauticform-text mauticform-required">
							<input id="mauticform_input_salonsabinacoilbfhehomepage_fname" name="mauticform[fname]" value="" placeholder="שם מלא" class="mauticform-input form_input" type="text" />
							<span class="mauticform-errormsg" style="display: none;">This is required.</span>
						</div>
						
						<div id="mauticform_salonsabinacoilbfhehomepage_email"  data-validate="email" data-validation-type="email" class="mauticform-row mauticform-email mauticform-required">
							<input id="mauticform_input_salonsabinacoilbfhehomepage_email" name="mauticform[email]" value="" placeholder="אימייל" class="mauticform-input form_input type="email" />
							<span class="mauticform-errormsg" style="display: none;">This is required.</span>
						</div>

						<div id="mauticform_salonsabinacoilbfhehomepage_phone"  data-validate="phone" data-validation-type="tel" class="mauticform-row mauticform-tel mauticform-required">
							<input id="mauticform_input_salonsabinacoilbfhehomepage_phone" name="mauticform[phone]" value="" placeholder="טלפון" class="mauticform-input form_input" type="tel" />
							<span class="mauticform-errormsg" style="display: none;">This is required.</span>
						</div>
				</div>
				
				<div id="contentLeft" class="col-md-12">
				
						<div id="mauticform_salonsabinacoilbfhehomepage_f_56d97336ac690"  class="mauticform-row mauticform-text">
							<input id="mauticform_input_salonsabinacoilbfhehomepage_f_56d97336ac690" name="mauticform[f_56d97336ac690]" value="" placeholder="נושא הפנייה" class="mauticform-input" type="text" />
							<span class="mauticform-errormsg" style="display: none;"></span>
						</div>

						<div id="mauticform_salonsabinacoilbfhehomepage_f_56d973571ae5b"  class="mauticform-row mauticform-text">
							<textarea cols="40" rows="10" id="mauticform_input_salonsabinacoilbfhehomepage_f_56d973571ae5b" name="mauticform[f_56d973571ae5b]" class="mauticform-textarea">פנייה</textarea>
							<span class="mauticform-errormsg" style="display: none;"></span>
						</div>
				</div>		
				<div id="mauticform_salonsabinacoilbfhehomepage_submit"  class="mauticform-row mauticform-button-wrapper">
					<button type="submit" name="mauticform[submit]" id="mauticform_input_salonsabinacoilbfhehomepage_submit" name="mauticform[submit]" value="" class="mauticform-button" value="1">שליחה</button>
				</div>
				<div class="clearfix"></div>
			</div>
				<input type="hidden" name="mauticform[formId]" id="mauticform_salonsabinacoilbfhehomepage_id" value="23" />
				<input type="hidden" name="mauticform[return]" id="mauticform_salonsabinacoilbfhehomepage_return" value="" />
				<input type="hidden" name="mauticform[formName]" id="mauticform_salonsabinacoilbfhehomepage_name" value="salonsabinacoilbfhehomepage" />
			</form>
		</div>
	</div>
	';
	return $html;
}