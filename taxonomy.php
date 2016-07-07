<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Global_Solution_Framework
 * @since GS Framework 1.0
 */

get_header(); ?>
    <section id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">
			<?php if (is_category): ?>
				<header class="page-header">	
				
				<?php 
				$url = $_SERVER['REDIRECT_URL'];
				$category_slug = explode('/', $url);
				$category = $category_slug[2];
				$current_category = get_term_by( 'slug', $category, CUSTOM_TAXONOMY );	
				//var_dump($current_category);
				?>
				
				<h1 class="page-title col-lg-12"><?php _e( $current_category->name, 'gs_framework' ); ?></h1>
				
                    <?php
                        if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs" class="col-lg-12">','</p>');}
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
				</header><!-- .page-header -->
				
				<?php
				$args=array(
				'post_type' => POST_TYPE,
				'tax_query' => array(array('taxonomy' => CUSTOM_TAXONOMY,'field' => 'id','terms' => $current_category->term_taxonomy_id))
				);
					$my_query = null;
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
					  while ($my_query->have_posts()) : $my_query->the_post(); ?>  
					  
						<div class="col-lg-4"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						<?php  the_post_thumbnail() ?></div>
						
						<?php //get_template_part( 'template-parts/category-content', get_post_format() );
					  endwhile;
					}
					
					wp_reset_query();  // Restore global post data stomped by the_post().


		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'page-content', 'none' );
                
                
		endif;
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php get_footer(); ?>
