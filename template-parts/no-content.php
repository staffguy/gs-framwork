<?php
echo '<pre>';
		$terms = get_the_terms($post->ID, 'bd_coll-category');
		var_dump($terms);
?>
<div class="container">
<article>
<?php echo the_title(); ?>
<?php echo the_content(); ?>
<?php echo the_post_thumbnail(); ?>
</article>


</div>