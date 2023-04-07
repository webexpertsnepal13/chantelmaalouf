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
								<?php
								if ( is_active_sidebar( 'footer-sidebar-2' ) ) :
									dynamic_sidebar( 'footer-sidebar-2' );
								endif;
								?>
							</div>
						</div><!-- footer-block -->
					</div><!-- col-lg-4 -->
					<div class="col-lg-4">
						<div class="footer-block footer-mid">
							<?php the_custom_logo(); ?>
							<div class="widget">
								<?php
								if ( is_active_sidebar( 'footer-sidebar-3' ) ) :
									dynamic_sidebar( 'footer-sidebar-3' );
								endif;
								?>
							</div>
						</div><!-- footer-block -->
					</div><!-- col-lg-4 -->
					<div class="col-lg-4">
						<div class="footer-block">
							<div class="widget">
								<?php
								if ( is_active_sidebar( 'footer-sidebar-4' ) ) :
									dynamic_sidebar( 'footer-sidebar-4' );
								endif;
								?>
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
