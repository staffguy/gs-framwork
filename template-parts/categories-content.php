					
					
		<?php if(is_category){echo '';} ?>
			<?php $categories = get_categories('taxonomy=bd_coll-category&post_type=bd_coll'); ?>
           <?php foreach ($categories as $category) : ?>
				<div class="col-lg-4"><p><a href="<?php echo $category->slug; ?>"><?php echo $category->name; ?></a></p>
				
				<?php 

				
				$type = 'bd_coll';
				$args=array('post_type' => $type,'post_status' => 'publish','posts_per_page' => -1,'caller_get_posts'=> 1,'tax_query'=>array(array('taxonomy' => 'bd_coll','field'=>'id', 'terms'=>'bd_coll-category', 'operator'=>'IN')),);
					$my_query = null;
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
					  while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<div class="col-lg-6"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						<?php  the_post_thumbnail() ?></div>
						<?php
					  endwhile;
					}
					wp_reset_query();  // Restore global post data stomped by the_post().
					
						?>
						</div>
				<?php //echo '<pre>'; var_dump($category); ?>
				<?php endforeach; ?>	


<?php $current_category_name = get_the_terms( $post->ID, 'bd_catalog' ); ?>
        <a href="../<?php echo $current_category_name[0]->slug; ?>"><?php echo $current_category_name[0]->name; ?></a>
        <p></p>