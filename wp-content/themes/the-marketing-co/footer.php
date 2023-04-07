<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Marketing_Co
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="footer-block">
							<div class="widget">
								<h4 class="widget-title">Services</h4>
								<ul>
									<li><a href="#">Bridal Make up</a></li>
									<li><a href="#">Event Make up</a></li>
									<li><a href="#">Hair Styling</a></li>
									<li><a href="#">Hydrotherapy facial</a></li>
									<li><a href="#">One on One Make up training</a></li>
									<li><a href="#">Sip & Learn</a></li>
									<li><a href="#">Shop</a></li>
								</ul>
							</div>
						</div><!-- footer-block -->
					</div><!-- col-lg-4 -->
					<div class="col-lg-4">
						<div class="footer-block footer-mid">
							<?php the_custom_logo(); ?>
							<div class="widget">
								<h4 class="widget-title">Get Social</h4>
								<ul>
									<li></li>
								</ul>
							</div>
						</div><!-- footer-block -->
					</div><!-- col-lg-4 -->
					<div class="col-lg-4">
						<div class="footer-block">
							<div class="widget">
								<h4 class="widget-title">Info</h4>
								<ul>
									<li><a href="#">About</a></li>
									<li><a href="#">Contact</a></li>
									<li><a href="#">Returns & Exchanges</a></li>
									<li><a href="#">Terms & Conditions</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>
						</div><!-- footer-block -->
					</div><!-- col-lg-4 -->
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- footer-top -->
	</footer><!-- site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
