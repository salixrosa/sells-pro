<?php
/**
 *  @package Wordpress
 *  @subpackage sells-pro
 *  @since sells-pro 1.0
 */
?>

<!DOCTYPE html>

<html>

	<head>
		<meta name="viewport" content="initial-scale=1.0,width=device-width">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<?php wp_head(); ?>
		<link type="style/css" rel="stylesheet" href="<?php echo get_template_directory_uri() . '/footerfallback.css'; ?>">
	</head>

	<body <?php body_class(); ?>>
		<div id="wrapper">
			<header id="banner">
				<div class="bar">
					<div class="container table">
						<?php
							get_search_form();
						?>
						<div class="right">
							<i class="fa fa-bars" id="mobilebutton"></i>
						</div>
					</div>
					<div class="container">
						<nav role="navigation">
								<?php
								wp_nav_menu( array(
									'theme_location' 	=> 'primary',
									'container' 			=> false,
									'menu_id'					=> 'header-menu'
								));
								?>
						</nav>
						<?php
							wp_nav_menu( array(
								'theme_location' 	=> 'social',
								'container' 			=> '',
								'menu_id'					=> 'social-bar-menu'
							));
							?>
					</div>
				</div>
				<div class="container">
					<img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>" id="headerlogo">
				</div>
			</header>
