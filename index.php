<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); 



// Pull Homepage
$post = get_post(6); 
setup_postdata( $post );
 
	$hero_text = get_field('hero_text');
	$hero_sub_text = get_field('hero_sub_text');
	$images = get_field('featured_images');
 
wp_reset_postdata();

?>
<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<section class="hero">
				<h2><?php echo $hero_text; ?></h2>
				<h3><?php echo $hero_sub_text; ?></h3>

				<?php if( $images ): ?>
					<div class="hero-gal">
					    <?php foreach( $images as $image ): ?>
				            <div class="hero-gal-img">
				            	<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
				            </div>
				        <?php endforeach; ?>
			        </div>
				<?php endif; ?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- wrapper -->
<?php
get_footer();
