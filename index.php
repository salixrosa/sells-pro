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
			<?php get_template_part( 'content', get_post_format() ); ?>
		</div>
	</article>

	<?php
	endwhile;

	get_footer();
?>
