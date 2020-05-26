<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */


$phone = get_field('phone', 'option');
$address = get_field('address', 'option');
$email = get_field('email', 'option');
$spam = antispambot($email);
$hours = get_field('hours', 'option');
$instagram = get_field('instagram_link', 'option');
$twitter = get_field('twitter_link', 'option');
$facebook = get_field('facebook_link', 'option');
$google_analytics = get_field('google_analytics', 'option');
$sitemap = get_field('sitemap_link', 'option');

$packhouse_link = get_field('packhouse_link', 'option');
$summit_room_link = get_field('summit_room_link', 'option');
$joe_and_nosh_link = get_field('joe_and_nosh_link', 'option');
$treehouse_kitchen_link = get_field('treehouse_kitchen_link', 'option');

?>

	</div><!-- #content -->


	


	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footer-top">
		<img src="<?php bloginfo('template_url'); ?>/images/footer-stroke.png">
	</div>
		<div class="wrapper">
			
			<section class='footer-col-1 foot-col'>
				<div class="item">
					<h3>HOURS</h3>
					<?php echo $hours; ?>
				</div>
				<div class="item">
					<div class="social social-footer">
						<li class="facebook">
							<i class="fa fa-facebook-square" aria-hidden="true"><a href="<?php echo $facebook; ?>"></a></i>
						</li>
						<li class="facebook">
							<i class="fa fa-instagram" aria-hidden="true"><a href="<?php echo $instagram; ?>"></a></i>
						</li>
						<li class="facebook">
							<i class="fa fa-twitter-square" aria-hidden="true"><a href="<?php echo $twitter; ?>"></a></i>
						</li>
					</div>
					<div class="food-truck-wrap">
						<a href="<?php bloginfo('url'); ?>/contact">
							<div class="food-truck-words">
								RESERVE OUR FOOD TRUCK <br>FOR YOUR NEXT EVENT
							</div>
							<div class="food-truck">
								
								<img src="<?php bloginfo('template_url'); ?>/images/food-truck.png">
							</div>
						</a>
					</div>
				</div>
			</section>

			<section class='footer-col-2 foot-col'>
				<div class="item">
					<h3>COME SEE US</h3>
					<?php echo $address; ?>
				</div>
				<div class="item">
					<h3>WE CATER! GIVE US A CALL</h3>
					<?php echo '(p) ' . $phone; ?>
					<br>
					<?php echo '(e) <a href="mailto:'. $spam . '">' . $spam . '</a>'; ?>
				</div>
				
			</section>

			<section class='footer-col-3 foot-col'>
				<h3 class="center">WE PROUDLY SUPPORT</h3>
				<div class="behailu">
					<a target="_blank" href="http://www.behailuacademy.org/">
						<img src="<?php bloginfo('template_url'); ?>/images/behailu.png">
					</a>
				</div>
			</section>

			<div class="swoosh bottom-swoosh">
				<img src="<?php bloginfo('template_url');?>/images/swoosh.png">
			</div>

			<!-- <section class="foot-col group-start">
				
				<div class="img-center">
					<h3 class="center">A PART OF</h3>
					<div class="rollover-tree">
						<a href="<?php echo $treehouse_kitchen_link; ?>">
							<img alt="Tree House Kitchen" title="Tree House Kitchen" src="<?php bloginfo('template_url'); ?>/images/tree-house-kitchen.png">
						</a>
					</div>
				</div> 
			</section>
			<div class="group-item">
				<div class="img-summit rollover">
					<a href="<?php echo $summit_room_link; ?>">
						<img alt="Summit Room" title="Summit Room" src="<?php bloginfo('template_url'); ?>/images/summit-room.png">
					</a>
				</div>
			</div>
			-->
			<!-- <div class="group-item ">
				<div class="img-packhouse rollover">
					<a href="<?php echo $packhouse_link; ?>">
						<img alt="Packhouse" title="Packhouse" src="<?php bloginfo('template_url'); ?>/images/packhouse.png">
					</a>
				</div>
			</div>
			<div class="group-item ">
				<div class="img-joe rollover">
					<a href="<?php echo $joe_and_nosh_link; ?>">
						<img alt="Joe and Nosh" title="Joe and Nosh" src="<?php bloginfo('template_url'); ?>/images/joe-and-nosh.png">
					</a>
				</div>
			</div> -->
			
		</div><!-- wrapper -->
		<div class="creds">
		<div class="wrapper">
			<?php echo '<a href="'.$sitemap.'">sitemap</a> - site by <a href="http://bellaworksweb.com">bellaworks</a>'; ?>
		</div></div>
	</footer><!-- #colophon -->


</div><!-- #page -->

<?php 

wp_footer(); 

the_field('google_analytics', 'option');

?>

</body>
</html>
