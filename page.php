<?php
	/**
	 *  @package Wordpress
	 *  @subpackage sells-pro
	 *  @since sells-pro 1.0
	 */
	get_header();

	while(have_posts()) : the_post();
?>

	<article class="<?php echo get_post_format(); ?>">
		<div class="container">
			<div class="postmeta">
			    <h1><?php the_title(); ?></h1>
			</div>
			<div class="postcontent">
			  <?php the_content(); ?>
			</div>
		</div>
	</article>

	<?php
	endwhile;
	
	get_footer();
?>
