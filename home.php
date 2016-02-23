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
	?>
	<div class="container">
		<div class="next older">
			<?php next_posts_link('<i class="fa fa-long-arrow-left"></i> Older Posts'); ?>
		</div>
		<div class="next newer">
			<?php previous_posts_link('Newer Posts <i class="fa fa-long-arrow-right"></i>'); ?>
		</div>
	</div>
<?php
	get_footer();
?>
