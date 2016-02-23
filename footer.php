<?php
/**
 *  @package Wordpress
 *  @subpackage sells-pro
 *  @since sells-pro 1.0
 */
?>

			<footer>
				<div class="container">
					<?php if(is_active_sidebar('extended-footer')){
						echo '<ul id="extended-footer">';
						dynamic_sidebar( 'extended-footer' );
						echo '</ul>';
					} ?>
					<p id="theme"><a href="https://github.com/salixrosa/sells-pro"><i class="fa fa-github"></i></a> sells-pro</p>
				</div>
			</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
