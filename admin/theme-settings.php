<?php
	
function gs_framework_customize_register($wp_customize){
    
    // Add Logo Setting Section
    $wp_customize->add_section('title-box_section' , array(
        'title'       =>  __( 'Logo', 'gs_logo'),
	'priority'    =>  30,
	'description' => 'Upload a logo to replace the default site name and description in header',
    ) );
    $wp_customize->add_setting('title-box');
	
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'title-box', array(
	'label'	    => __('Add Logo','gs_logo'),
        'section'   => 'title-box_section',
        'settings'  => 'title-box',
    ) ) );
    
    //  =============================================
    //  =  Add Custom Section in theme customizer   =
    //  =============================================
    //
    $wp_customize->add_section('gs_framework_social_media', array(
        'title'    => __('רשת חברתית', 'gs_framework'),
        'description' => 'קישורים והגדרות לרשתות חברתיות',
        'priority' => 120,
    ));
    //  =============================================
    //  =  Set image uploaders  =
    //  =============================================
    // 
    $wp_customize->add_setting('gs_framework_theme_options[callus_icon_uploader]', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'              => 'option',
    ));
    $wp_customize->add_setting('gs_framework_theme_options[facebook_icon_uploader]', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'              => 'option',
    ));
    $wp_customize->add_setting('gs_framework_theme_options[twitter_icon_uploader]', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'              => 'option',
    )); 
    $wp_customize->add_setting('gs_framework_theme_options[youtube_icon_uploader]', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'              => 'option',
    ));
    //  =============================================
    //  =  Set Urls  =
    //  =============================================
    //
    $wp_customize->add_setting('gs_framework_theme_options[callus_url]', array(
        'default'        => '1800',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_setting('gs_framework_theme_options[facebook_url]', array(
        'default'        => '#',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_setting('gs_framework_theme_options[twitter_url]', array(
        'default'        => '#',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
    $wp_customize->add_setting('gs_framework_theme_options[youtube_url]', array(
        'default'        => '#',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
    //  =============================================
    //  =  Add Custom Callus Url And Icon   =
    //  =============================================
    // 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'callus_icon_uploader', array(
        'label'    => __('אייקון טלפון עיסקי', 'gs_framework'),
        'section'  => 'gs_framework_social_media',
        'settings' => 'gs_framework_theme_options[callus_icon_uploader]',
    )));
    $wp_customize->add_control('gs_framework_callus_url', array(
        'label'      => __('טלפון עסקי', 'gs_framework'),
        'description' => 'הגדר את הטלפון העסקי',
        'section'    => 'gs_framework_social_media',
        'settings'   => 'gs_framework_theme_options[callus_url]',
    ));
    //  =============================================
    //  =  Add Custom Facebook Url And Icon   =
    //  =============================================
    // 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'facebook_icon_uploader', array(
        'label'    => __('אייקון פייסבוק', 'gs_framework'),
        'section'  => 'gs_framework_social_media',
        'settings' => 'gs_framework_theme_options[facebook_icon_uploader]',
    )));
    //
    $wp_customize->add_control('gs_framework_facebook_url', array(
        'label'      => __('קישור לפייסבוק', 'gs_framework'),
        'description' => 'הגדר את הקישור לדף הפייסבוק של העסק',
        'section'    => 'gs_framework_social_media',
        'settings'   => 'gs_framework_theme_options[facebook_url]',
    ));
    //  =============================================
    //  =  Add Custom Twitter Url And Icon   =
    //  =============================================
    //
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'twitter_icon_uploader', array(
        'label'    => __('אייקון טוויטר', 'themename'),
        'section'  => 'gs_framework_social_media',
        'settings' => 'gs_framework_theme_options[twitter_icon_uploader]',
    )));
    //
    $wp_customize->add_control('gs_framework_twitter_url', array(
        'label'      => __('קישור לטוויטר', 'gs_framework'),
        'description' => 'הגדר את הקישור לדף הטוויטר של העסק',
        'section'    => 'gs_framework_social_media',
        'settings'   => 'gs_framework_theme_options[twitter_url]',
    ));
    //  =============================================
    //  =  Add Custom Youtube Url And Icon   =
    //  =============================================
    //
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'youtube_icon_uploader', array(
        'label'    => __('אייקון יוטיוב', 'gs_framework'),
        'section'  => 'gs_framework_social_media',
        'settings' => 'gs_framework_theme_options[youtube_icon_uploader]',
    )));
    //
    $wp_customize->add_control('gs_framework_youtube_url', array(
        'label'      => __('קישור ליוטיוב', 'gs_framework'),
        'description' => 'הגדר את הקישור לערוץ היוטיוב של העסק',
        'section'    => 'gs_framework_social_media',
        'settings'   => 'gs_framework_theme_options[youtube_url]',
    ));
    
    
    //  =============================
    //  = Image Upload              =
    //  =============================
    
    
 /* 
    //  =============================
    //  = Radio Input               =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[color_scheme]', array(
        'default'        => 'value2',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
 
    $wp_customize->add_control('themename_color_scheme', array(
        'label'      => __('Color Scheme', 'themename'),
        'section'    => 'themename_color_scheme',
        'settings'   => 'themename_theme_options[color_scheme]',
        'type'       => 'radio',
        'choices'    => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
        ),
    ));
 
    //  =============================
    //  = Checkbox                  =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[checkbox_test]', array(
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));
 
    $wp_customize->add_control('display_header_text', array(
        'settings' => 'themename_theme_options[checkbox_test]',
        'label'    => __('Display Header Text'),
        'section'  => 'themename_color_scheme',
        'type'     => 'checkbox',
    ));
 
 
    //  =============================
    //  = Select Box                =
    //  =============================
     $wp_customize->add_setting('themename_theme_options[header_select]', array(
        'default'        => 'value2',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
    $wp_customize->add_control( 'example_select_box', array(
        'settings' => 'themename_theme_options[header_select]',
        'label'   => 'Select Something:',
        'section' => 'themename_color_scheme',
        'type'    => 'select',
        'choices'    => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
        ),
    ));
 
 
    //  =============================
    //  = Image Upload              =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[image_upload_test]', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload_test', array(
        'label'    => __('Image Upload Test', 'themename'),
        'section'  => 'themename_color_scheme',
        'settings' => 'themename_theme_options[image_upload_test]',
    )));
 
    //  =============================
    //  = File Upload               =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[upload_test]', array(
        'default'           => 'arse',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Upload_Control($wp_customize, 'upload_test', array(
        'label'    => __('Upload Test', 'themename'),
        'section'  => 'themename_color_scheme',
        'settings' => 'themename_theme_options[upload_test]',
    )));
 
 
    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[link_color]', array(
        'default'           => '#000',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_color', array(
        'label'    => __('Link Color', 'themename'),
        'section'  => 'themename_color_scheme',
        'settings' => 'themename_theme_options[link_color]',
    )));
 
 
    //  =============================
    //  = Page Dropdown             =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[page_test]', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('themename_page_test', array(
        'label'      => __('Page Test', 'themename'),
        'section'    => 'themename_color_scheme',
        'type'    => 'dropdown-pages',
        'settings'   => 'themename_theme_options[page_test]',
    ));

    // =====================
    //  = Category Dropdown =
    //  =====================
    $categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cats[$category->slug] = $category->name;
	}
 
	//$wp_customize->add_setting('_s_f_slide_cat', array(
	//	'default'        => $default
	//));
	//$wp_customize->add_control( 'cat_select_box', array(
	//	'settings' => '_s_f_slide_cat',
	//	'label'   => 'Select Category:',
	//	'section'  => '_s_f_home_slider',
	//	'type'    => 'select',
	//	'choices' => $cats,
	//));
	*/
}
 
add_action('customize_register', 'gs_framework_customize_register');


