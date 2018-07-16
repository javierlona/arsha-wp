<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Arsha
 */
$facebook_username  = get_field('facebook_username');
$twitter_username  = get_field('twitter_username');
$linkedin_username  = get_field('linkedin_username');
$pinterest_username  = get_field('pinterest_username');
$google_plus_username  = get_field('google_plus_username');

$address = get_field('address');
$phone = get_field('phone');
$email = get_field('email');
?>


<?php wp_footer(); ?>

<!--start footer-->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Get in touch with us</h5>
					<address>
						<?php echo $address; ?>
					</address>
					<p><i class="icon-phone"></i><?php echo $phone; ?><br>
					<i class="icon-envelope-alt"></i><?php echo $email; ?></p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Pages</h5>
					<ul class="link-list">
						<!-- <li>
							<a href="#">Press release</a>
						</li>
						<li>
							<a href="#">Terms and conditions</a>
						</li>
						<li>
							<a href="#">Privacy policy</a>
						</li>
						<li>
							<a href="#">Career center</a>
						</li>
						<li>
							<a href="#">Contact us</a>
						</li> -->
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-2',
								'container'			 => 'nav',
								'menu_class'		 => 'list-unstyled'
							));

						 ?>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="link-list">
						<li>
							<a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing
							elit.</a>
						</li>
						<li>
							<a href="#">Pellentesque et pulvinar enim. Quisque at tempor
							ligula</a>
						</li>
						<li>
							<a href="#">Natus error sit voluptatem accusantium
							doloremque</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Facebook</h5>
					<div class="flickr_badge">
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Flonasgardeningservice&tabs=timeline&width=180&height=70&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="180" height="140" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<hr>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="copyright">
						<p><span>&copy; Custom WordPress theme Based on <?php bloginfo('name'); ?> <?php echo date('Y'); ?> All right reserved. By</span> <a href=
						"http://bootstraptaste.com" target=
						"_blank">Bootstraptaste</a></p><!--
															All links in the footer should remain intact.
															Licenseing information is available at: http://bootstraptaste.com/license/
															You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Arsha
													-->
					</div>
				</div>
				<div class="col-sm-6">
					<ul class="social-network">
						<li>
							<a data-placement="top" href="https://www.facebook.com/<?php echo $facebook_username;?> " title="Facebook"><i class=
							"fa fa-facebook fa-1x"></i></a>
						</li>
						<li>
							<a data-placement="top" href="https://www.twitter.com/<?php echo $twitter_username; ?>" title="Twitter"><i class=
							"fa fa-twitter fa-1x"></i></a>
						</li>
						<li>
							<a data-placement="top" href="https://www.linkedin.com/in/<?php echo $linkedin_username; ?>" title="Linkedin"><i class=
							"fa fa-linkedin fa-1x"></i></a>
						</li>
						<li>
							<a data-placement="top" href="https://www.pinterest.com/<?php echo $linkedin_username; ?>" title="Pinterest"><i class=
							"fa fa-pinterest fa-1x"></i></a>
						</li>
						<li>
							<a data-placement="top" href="https://plus.google.com/<?php echo $google_plus_username; ?>" title="Google plus"><i class=
							"fa fa-google-plus fa-1x"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer><!--end footer-->

<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.js">
</script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js">
</script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/responsive-slider.js">
</script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/wow.min.js">
</script>
<script>
	wow = new WOW(
	 {

			}   )
			.init();
</script>

</body>
</html>
