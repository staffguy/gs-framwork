<div class="col-lg-12">
<article>   
    <div class="col-lg-8">
         <div class="primary-page-image"><?php echo the_post_thumbnail(); ?></div>
		 <p><?php echo the_content(); ?></p>
    </div>
	

    <div class="col-lg-4">    
        <?php if(function_exists('gs_get_custom_post_current_category_url')){_e(gs_get_custom_post_current_category_url(),'');} ?>       
		<?php echo do_shortcode('[contact-form-7 id="221" title="צור קשר דפים פנימיים"]'); ?>
		<!--script type="text/javascript" src="http://apps.gsolution.co.il/mautic/form/generate.js?id=25"></script-->
    </div>

</article>


</div>