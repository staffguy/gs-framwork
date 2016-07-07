<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<article>   
    <div class="col-lg-6 col-md-6">
	<?php if(function_exists('gs_get_item_condition')) gs_get_item_condition(); ?>
		 
         <div class="primary-item-image"><?php echo the_post_thumbnail(); ?></div>
		 <div class="second-row item-thumbnails" id="gallery_01">
			 <?php gs_item_thumbnails(); ?>
		 </div>
    </div>
	

    <div class="col-lg-6 col-md-6">    
        <?php if(function_exists('gs_get_custom_post_current_category_url_bd')){_e(gs_get_custom_post_current_category_url_bd(),'');} ?>
        <?php if(function_exists('gs_get_custom_post_current_category_url_ev')){_e(gs_get_custom_post_current_category_url_ev(),'');} ?>
		
         <?php echo 'מספר קטלוגי: 00'.$post->ID ?>
         <h1 class="item-title"><?php echo the_title(); ?></h1>
		 <p><?php next_post_link( '%link', 'השמלה הבאה', TRUE, ' ', 'category' ); ?></p>
		 <p><?php previous_post_link( '%link', 'השמלה הקודמת', TRUE, ' ', 'category' ); ?></p>
		 <p><?php next_post_link( '%link', 'השמלה הבאה', TRUE, ' ', 'categorys' ); ?></p>
		 <p><?php previous_post_link( '%link', 'השמלה הקודמת', TRUE, ' ', 'categorys' ); ?></p>
         <!--h2>מידות</h2>
         <p>< ?php $vv = get_metadata('post', $post, 'more_details_dress_size', '');
			echo $vv[0]; ?>
		 </p>
         <h2>צבעים</h2>
		 < ?php if(function_exists('gs_get_item_color')) gs_get_item_color(); ?>
         <p>< ?php $vv = get_metadata('post', $post, 'more_details_dress_color', '');
			echo $vv[0]; ?></p-->
		  
		 <p><?php echo the_content(); ?></p>	
		 <?php pll_e('<p>שיתוף</p>'); ?>
		 <?php echo do_shortcode('[contact-form-7 id="197" title="הזמנת שמלה"]'); ?>
		 <br>
		 <div>לצפייה מיטבית בשמלה עמדי על התמונה אם העכבר, להגדלה או הקטנה הזיזי את הגלגל למעלה ולמטה</div>
    </div>
	<div class="col-lg-12">
		<div class="fb-comments" data-href="<?php get_permalink($post) ?>" data-numposts="5"></div>
	</div>
	
			<!--img src="http://salonsabin.co.il/wp-content/uploads/2016/01/DSC_5924-Small.jpg" data-jkit="[zoom:scale=2]"/-->

</article>


</div>