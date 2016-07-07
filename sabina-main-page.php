<?php /* Template Name: דף הבית סלון סבינה 

 * @package WordPress
 * @subpackage Global_Solution_Framework
 * @since GS Framework 1.0
 */

//if ( is_home() ) :
//	get_header( 'home' );
//elseif ( is_404() ) :
	//get_header( '404' );
//elseif ( is_lp() ) :	
	//get_header('landing-page');
//else :
	get_header();
//endif;
?>
<div id="decorations">
    <div class="decor decor_1" style="transition: -webkit-transform 0ms ease-out; transform: translate3d(2.59px, -3.88px, 0px);"></div>
    <div class="decor decor_2" style="transition: -webkit-transform 0ms ease-out; transform: translate3d(25.59px, -23.88px, 0px);"></div>
    <div class="decor decor_3" style="transition: -webkit-transform 0ms ease-out; transform: translate3d(17.06px, -15.92px, 0px);"></div>
    <div class="decor decor_4" style="transition: -webkit-transform 0ms ease-out; transform: translate3d(17.06px, -15.92px, 0px);"></div>
    <div class="decor decor_5" style="transition: -webkit-transform 0ms ease-out; transform: translate3d(8.53px, -7.96px, 0px);"></div>
    <div class="decor decor_6" style="transition: -webkit-transform 0ms ease-out; transform: translate3d(25.59px, -23.88px, 0px);"></div>
    <div class="decor decor_7" style="transition: -webkit-transform 0ms ease-out; transform: translate3d(8.53px, -7.96px, 0px);"></div>
    <div class="decor decor_8" style="transition: -webkit-transform 0ms ease-out; transform: translate3d(8.53px, -7.96px, 0px);"></div>
    <div class="decor decor_9" style="transition: -webkit-transform 0ms ease-out; transform: translate3d(17.06px, -15.92px, 0px);"></div>
    <div class="decor decor_10" style="transition: -webkit-transform 0ms ease-out; transform: translate3d(17.06px, -15.92px, 0px);"></div>
</div>
  
		<div class="first-row first-slider container">             
			<?php if( function_exists('cyclone_slider') ) cyclone_slider('first-slider'); ?>
							<?php echo do_shortcode('[smartslider3 slider=1]'); ?>
			<div class="hot-sale-banner container">
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
							<div id="secondary" class="widget-area col-md-3 col-sm-4 col-xs-4" role="complementary">
							<?php dynamic_sidebar( 'sidebar-1' ); ?>
							</div>
			<?php endif; ?>
			</div>
		</div>
		<div id="decorations2">
		<div class="decor decor__17"></div>
		<div class="decor decor__18"></div>
		<div class="decor decor__19"></div>
		<div class="decor decor__20"></div>
		<div class="decor decor__21"></div>
		<div class="decor decor__22"></div>
		<div class="decor decor__23"></div> 
		</div>
    
		<div class="second-row second-slider container-fluid">
			<?php if( function_exists('cyclone_slider') ) cyclone_slider('second-slider'); ?>
                        <?php echo do_shortcode('[smartslider3 slider=2]'); ?>
		</div>
		<div class="content-row container">
			<h2 class="home-page-title"><?php echo the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
                <div class="third-row bridal-dress-collections">
				<div class="contactus-arrow container">
				<div class="contactus-arrow-box"><a id="contact-forwarder" href="#mauticform_wrapper_salonsabinacoilbfhehomepage" data-jkit="[scroll:speed=1000;easing=easeOutBounce;offset=-120]">לתיאום פגישה<br><span>לחצי כאן ></span></a></div>
				</div>
		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                        <div id="secondary" class="widget-area container" role="complementary">
                        <?php dynamic_sidebar( 'sidebar-2' ); ?>
                        </div>
                <?php endif; ?>	
		</div>
                <div class="fourth-row evening-dress-collections container-fluid">
		<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
                        <div id="secondary" class="widget-area container" role="complementary">
                        <?php dynamic_sidebar( 'sidebar-3' ); ?>
                        </div>
                <?php endif; ?>		
		</div>
                <div class="five-row contact-form container">
		<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
                        <div id="secondary" class="widget-area container" role="complementary">
                        <?php dynamic_sidebar( 'sidebar-4' ); ?>
                        </div>
                <?php endif; ?>		
		</div>  
</div> 		
<!--?php get_sidebar(); ?-->
</div>
<!--a id="back-to-top-scroller" class="scroll-to-top" href="body" data-jkit="[scroll:speed=1000;easing=easeOutBounce;offset=-120]"></a-->
<?php get_footer(); ?>