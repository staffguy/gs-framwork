<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
	
	</div><!-- .site-content -->
	    <div class="last-row about-contact container">
		<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
                        <div id="secondary" class="widget-area col-lg-4 col-md-3" role="complementary">
                        <?php dynamic_sidebar( 'sidebar-5' ); ?>
                        </div>
                <?php endif; ?>	
                <?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
                        <div id="secondary" class="widget-area col-lg-4 col-md-3" role="complementary">
                        <?php dynamic_sidebar( 'sidebar-6' ); ?>
                        </div>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
                        <div id="secondary" class="widget-area col-lg-4 col-md-3" role="complementary">
                        <?php dynamic_sidebar( 'sidebar-7' ); ?>
                        <div class="swan-decor"></div>    
                        </div>
                <?php endif; ?> 
		</div> 
        <div class="footer-row-map">
                <?php if ( is_active_sidebar( 'sidebar-8' ) ) : ?>
                        <div id="secondary" class="widget-area container-fluid" role="complementary">
                        <?php dynamic_sidebar( 'sidebar-8' ); ?>
                        </div>
                <?php endif; ?> 
		</div> 
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			<a href="<?php echo esc_url( __( 'http://gsolution.co.il/', 'twentyfifteen' ) ); ?>"><?php printf( __( 'Proudly powered by Global Solution', 'twentyfifteen' ), 'WordPress' ); ?></a> 
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
