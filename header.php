<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Global_Solution_Framework
 * @since GS Framework 1.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]><class="lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name='yandex-verification' content='454cdadb3505f018' />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!--meta name="viewport" content="width=device-width"-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/settings/libs/bootstrap/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/settings/libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!--link rel="stylesheet" href="< ?php echo get_template_directory_uri() ?>/settings/libs/font-awesome-4.2.0/css/font-awesome.min.css" /-->
	<!--link rel="stylesheet" href="< ?php echo get_template_directory_uri() ?>/settings/libs/fancybox/jquery.fancybox.css" /-->
	<!--link rel="stylesheet" href="< ?php echo get_template_directory_uri() ?>/settings/libs/owl-carousel/owl.carousel.css" /-->
	<!--link rel="stylesheet" href="< ?php echo get_template_directory_uri() ?>/settings/libs/countdown/jquery.countdown.css" /-->
	<!--link rel="stylesheet" href="< ?php echo get_template_directory_uri() ?>/settings/css/fonts.css" /-->
	<!--link rel="stylesheet" href="< ?php echo get_template_directory_uri() ?>/settings/css/main.css" /-->
	<!--link rel="stylesheet" href="< ?php echo get_template_directory_uri() ?>/settings/css/media.css" /-->
	<!--link rel="stylesheet" href="< ?php echo get_template_directory_uri() ?>/settings/css/navigation.css" /-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="http://maps.google.com/maps/api/js" type="text/javascript"></script>
	<!--script src="prettymap.js" type="text/javascript"></script-->
	
	<!--script type="text/javascript" src="http://salonsabin.co.il/wp-includes/js/jquery/jquery.js?ver=1.11.3"></script-->
	<!--script type="text/javascript" src="http://salonsabin.co.il/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1"></script-->
	
	<!--link rel="script" href="< ?php echo get_template_directory_uri() ?>/settings/libs/landing-nav/navigation.js" /-->
	<!--link rel="stylesheet" href="< ?php echo get_template_directory_uri() ?>/settings/libs/fancybox/jquery.fancybox.js" /-->
	<!--script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script-->
	<script>// <![CDATA[
	function initialize()
	{
	var latlng = new google.maps.LatLng(31.9757858,34.8100743,17);
	var opt =
	{
	center:latlng,
	zoom:15,
	mapTypeId: google.maps.MapTypeId.ROADMAP,
	navigationControl:true,
	streetViewControl:false,
	navigationControlOptions: {style:google.maps.NavigationControlStyle.DEFAULT},
	mapTypeControl:true,
	mapTypeControlOptions: {style:google.maps.MapTypeControlStyle.DEFAULT}
	};
	var map = new google.maps.Map(document.getElementById("mymap"),opt);
	var marker= new google.maps.Marker({
	position: new google.maps.LatLng(31.9757858,34.8100743,17),
	clickable: true,
	animation: google.maps.Animation.BOUNCE,
	map: map,
	icon: 'http://itscoding.com/google_maps_api_demo/images/marker.png'
	});
	var styles =
	[
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 18
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 19
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            }
        ]
    }
];
	map.setOptions({styles: styles});
	}
	// ]]></script>
	<script type="text/javascript">

    /** This section is only needed once per page if manually copying **/
    if (typeof MauticSDKLoaded == 'undefined') {
        var MauticSDKLoaded = true;
        var head            = document.getElementsByTagName('head')[0];
        var script          = document.createElement('script');
        script.type         = 'text/javascript';
        script.src          = 'http://apps.gsolution.co.il/mautic/media/js/mautic-form.js';
        script.onload       = function() {
            MauticSDK.onLoad();
        };
        head.appendChild(script);
        var MauticDomain = 'http://apps.gsolution.co.il';
        var MauticLang   = {
            'submittingMessage': "Please wait..."
        }
    }
	</script>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-11601176-5', 'auto');
	  ga('send', 'pageview');

	</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> onload="initialize()">
<div id="fb-root"></div>
<script>
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/he_IL/sdk.js#xfbml=1&version=v2.5&appId=639693849473506";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
    <div class="main-wrapper">
        <header>
	<img class="header-image" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
            <div class="container">      
               <?php if (get_theme_mod('title-box')): ?>
		<div class="title-box col-md-4 col-sm-4 col-xs-4">
		<a href="<?php echo esc_url( home_url ( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo('name','display')); ?>" rel="home"><img src="<?php echo esc_url(get_theme_mod('title-box') ); ?>"	alt="<?php echo esc_attr(get_bloginfo('name','display')); ?>"/></a>
		</div>
                <?php else: ?>
		<hgroup>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo('name','display') ); ?>"/></a></h1>
		<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>
                <?php endif; ?> 
            
                <div class="social-links-menu col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <?php if ( is_active_sidebar( 'sidebar-0' ) ) : ?>
                    <div id="secondary" class="widget-area" role="complementary">
                         <?php dynamic_sidebar( 'sidebar-0' ); ?>
                    </div>           
                    <?php endif; ?>
                </div>
                <div class="navigation-menu col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!--button id="menu-toggle" class="menu-toggle" aria-expanded="false" aria-controls="site-navigation social-navigation">תפריט</button>
			<div id="site-header-menu" class="site-header-menu">
                            < ?php //if ( has_nav_menu( 'primary' ) ) : ?>
							< ?php if ( has_nav_menu( 'top-menu' ) ) : ?>
				<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="< ?php esc_attr_e( 'Primary Menu', 'gs_framework' ); ?>">
                                    < ?php
					wp_nav_menu( array(
                                            'theme_location' => 'primary',
                                            'menu_class'     => 'gs-framework-primary-menu',
					) );
                                    ?>
				</nav><!-- .main-navigation -->
                            <!--?php endif; ?-->    
                <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    <!--a class="navbar-brand" href="#">SITE TITLE</a-->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'top-menu',
            'depth' => 2,
            'container' => false,
            'menu_class' => 'nav navbar-nav',
            'fallback_cb' => 'wp_page_menu',
            //Process nav menu using our custom nav walker
            'walker' => new wp_bootstrap_navwalker())
        );
        ?>
    </div><!-- /.navbar-collapse --> 
</nav>
				
                        </div>
                </div>
        </header>