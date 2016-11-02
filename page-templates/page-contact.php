<?php
/**
 * Template Name: Contact
 */

get_header(); 

$phone = get_field('phone', 'option');
$address = get_field('address', 'option');
$email = get_field('email', 'option');
$spam = antispambot($email);
$hours = get_field('hours', 'option');
$instagram_link = get_field('instagram_link', 'option');
$twitter_link = get_field('twitter_link', 'option');
$facebook_link = get_field('facebook_link', 'option');
$google_analytics = get_field('google_analytics', 'option');



?>
<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); 
			
			$map = get_field('map');
			$optImage = get_field('optional_image_below_map');
			$size = 'large';

			?>

			<section class="content entry-content">
				
				<header class="titles">
					<h1><?php the_title(); ?></h1>
				</header>
				

				<section class="contact">
					<div class="contact-wrap">
						<div class="contact-info">
							<div class="item">
								<?php echo '(p) ' . $phone; ?>
								<br>
								<?php echo '(e) <a href="'. $spam . '">' . $spam . '</a>'; ?>
							</div><!-- item -->
							
							<div class="item">
								<?php echo $address; ?>
							</div><!-- item -->

							<div class="item">
								<h3>HOURS</h3>
								<?php echo $hours; ?>
							</div><!-- item -->

							<?php the_content(); ?>
							<?php //echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>


						</div><!-- contact info -->

						<div class="map">
							<?php echo $map; ?>

						</div>
						<?php if( $optImage != ' ') { ?>
							<div class="optional-image">
							<?php echo wp_get_attachment_image( $optImage, $size ); ?>
							</div>
						<?php } ?>
					</div><!-- contact wrap -->
				</section>

				

			</section>

			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- wrapper -->
<?php
get_footer();
