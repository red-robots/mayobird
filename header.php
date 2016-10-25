<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400|Raleway" rel="stylesheet">

<?php 

wp_head(); 

$facebook = get_field('facebook_link', 'option');
$instagram = get_field('instagram_link', 'option');
$twitter = get_field('twitter_link', 'option');
$phone = get_field('phone', 'option');

?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acstarter' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper">

		
		<section class="header-info">
			<div class="phone"><?php echo $phone; ?></div>

			<div class="social social-head">
				<ul>
					<li class="facebook">
						<i class="fa fa-facebook-square" aria-hidden="true"><a target="_blank" href="<?php echo $facebook; ?>"></a></i>
					</li>
					<li class="facebook">
						<i class="fa fa-instagram" aria-hidden="true"><a target="_blank" href="<?php echo $instagram; ?>"></a></i>
					</li>
					<li class="facebook">
						<i class="fa fa-twitter-square" aria-hidden="true"><a target="_blank" href="<?php echo $twitter; ?>"></a></i>
					</li>
				</ul>
			</div>
		</section>
		
			
			<?php if(is_home()) { ?>
	            <h1 class="logo">
	            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
	            </h1>
	        <?php } else { ?>
	            <div class="logo">
	            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
	            </div>
	        <?php } ?>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'acstarter' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
	</div><!-- wrapper -->
		<div class="swoosh top-swoosh">
			<img src="<?php bloginfo('template_url');?>/images/swoosh.png">
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content ">
