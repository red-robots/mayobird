<?php
/**
 * Template Name: Menu
 */

get_header(); ?>
<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); 

			$menu = get_field('menu_pdf');

			?>

			<section class="content entry-content">
				<header class="titles">
					<h1><?php the_title(); ?></h1>
				</header>
				<section class="download">
					<div class="download-button">
						<a href="<?php echo $menu; ?>">Download PDF</a>
					</div>
				</section>
				
				<?php the_content(); ?>
			</section>

			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- wrapper -->
<?php
get_footer();
