<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
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
<div id="primary" class="content-area container">
    <main id="main" class="site-main" role="main">  
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs" class="col-lg-12">','</p>');} ?> 
	<?php if ( have_posts() ) : ?>
            <?php if ( is_home() && ! is_front_page() ) : ?>
		<header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
		</header>
		<?php endif; ?>
		<?php
		// Start the loop.
		
		while ( have_posts() ) : the_post();
                /*
		* Include the Post-Format-specific template for the content.
		* If you want to override this in a child theme, then include a file
		* called content-___.php (where ___ is the Post Format name) and that will be used instead.
		*/
		$terms = get_the_terms($post->ID, 'bd_coll-category');
		if($terms == true && $terms[0]->taxonomy == 'bd_coll-category'):
			get_template_part( 'template-parts/item-content', get_post_format() );	
		else:
			if(is_page()):
				get_template_part( 'template-parts/page-content', get_post_format() );
			else:
				get_template_part( 'template-parts/post-content', get_post_format() );
			endif;		
		endif;
        // End the loop.
		endwhile;
		// Previous/next page navigation.
		the_posts_pagination( array(
                     'prev_text'          => __( 'Previous page', 'twentysixteen' ),
                     'next_text'          => __( 'Next page', 'twentysixteen' ),
                     'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
		) );
		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/no-content', 'none' );
		endif;
		?>
    </main><!-- .site-main -->
		<!--?php get_sidebar(); ?-->
</div><!-- .content-area -->
<?php get_footer(); ?>   
</div>	
</body>
</html>