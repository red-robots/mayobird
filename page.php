<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>
<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); ?>

			<section class="content entry-content">
				<h1><?php the_title(); ?></h1>
				<?php 

				the_content(); 

				if(is_page('sitemap')) { ?>
					<div class="sitemap">
						<?php wp_nav_menu( array( 'theme_location' => 'sitemap') ); ?>
					</div>
					<?php } ?>

				?>
			</section>

			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- wrapper -->
<?php
get_footer();
