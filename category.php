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

get_header(); ?>
<section id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">
			<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs" class="col-lg-12">','</p>');} ?>
			<?php if (is_category()): ?>
			<?php the_archive_title( '<h1 class="page-title col-lg-12">', '</h1>' ); ?>
			<?php the_archive_description( '<div class="taxonomy-description container">', '</div>' ); ?>
					<?php $term_id = get_queried_object()->term_id;
					$args=array(
						'post_type' => array('bridal','evening'),
						'tax_query' => array(array('taxonomy' => 'category','field' => 'id','terms' => $term_id))
					);
					$my_query = null;
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
					  while ($my_query->have_posts()) : $my_query->the_post(); ?>  
					  
						<div class="col-md-3">
						<?php if(function_exists('gs_get_item_condition')) gs_get_item_condition(); ?>
							<div class="category-image">
							<a href="<?php the_permalink() ?>" rel="" title="<?php the_title_attribute(); ?>"><?php  the_post_thumbnail() ?></a>
							<a href="<?php the_permalink() ?>" rel="" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							
							</div>
						</div>
						
						<?php //get_template_part( 'template-parts/category-content', get_post_format() );
					  endwhile;
					}
					
					wp_reset_query();

?>
<?php endif; ?>
		
<?php

//get_sidebar( 'content' );
//get_sidebar();
get_footer();
