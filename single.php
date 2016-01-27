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
			<?php get_template_part( 'content', get_post_format() );
			the_tags( '<p class="tags"><i class="fa fa-tags"></i> <span> Tags: </span>', ' ', '</p>' ); ?>
		</div>

	</article>

	<?php
	endwhile;
	?>

	<div class="next older">
		<?php previous_post_link('<i class="fa fa-long-arrow-left"></i> %link ', '%title'); ?>
	</div>
	<div class="next newer">
		<?php next_post_link('%link <i class="fa fa-long-arrow-right"></i>', '%title'); ?>
	</div>

<?php
	get_footer();
?>
