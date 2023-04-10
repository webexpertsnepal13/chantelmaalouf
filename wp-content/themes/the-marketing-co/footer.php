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
				<div class="foo-top-wrap">
					<div class="row">
						<div class="col-lg-4">
							<div class="footer-block">
								<?php
								if ( is_active_sidebar( 'footer-sidebar-2' ) ) :
									dynamic_sidebar( 'footer-sidebar-2' );
								endif;
								?>
							</div><!-- footer-block -->
						</div><!-- col-lg-4 -->
						<div class="col-lg-4">
							<div class="footer-block footer-mid">
								<?php 
								the_custom_logo();
								
								// dynamic sidebar
								if ( is_active_sidebar( 'footer-sidebar-3' ) ) :
									dynamic_sidebar( 'footer-sidebar-3' );
								endif;
								?>
							</div><!-- footer-block -->
						</div><!-- col-lg-4 -->
						<div class="col-lg-4">
							<div class="footer-block footer-right">
								<?php
								if ( is_active_sidebar( 'footer-sidebar-4' ) ) :
									dynamic_sidebar( 'footer-sidebar-4' );
								endif;
								?>
							</div><!-- footer-block -->
						</div><!-- col-lg-4 -->
					</div><!-- row -->
				</div><!-- foo-top-wrap -->
				<div class="foo-payment-back-top">
					<?php
					if ( is_active_sidebar( 'footer-sidebar-5' ) ) :
						dynamic_sidebar( 'footer-sidebar-5' );
					endif;
					?>
					<div class="back-to-top">
						<a href="#">
							<svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.35555 3.94181L3.96932 0.554171C4.058 0.471038 4.16796 0.430398 4.27732 0.431941C4.40856 0.433792 4.51733 0.477517 4.58176 0.56281L8.09912 4.00886C8.27173 4.18006 8.26816 4.43316 8.09079 4.59943C8.00211 4.68256 7.89215 4.7232 7.78279 4.72166C7.67343 4.72011 7.54278 4.67608 7.47836 4.59079L4.69455 1.87234L4.54965 12.144C4.54638 12.376 4.34684 12.563 4.10624 12.5596C3.86564 12.5562 3.67146 12.3636 3.67474 12.1316L3.81963 1.86L0.959658 4.54102C0.870977 4.62415 0.761018 4.66479 0.651654 4.66325C0.54229 4.66171 0.433521 4.61798 0.347219 4.53238C0.174617 4.36118 0.178187 4.10808 0.35555 3.94181Z" fill="black"/></svg>
							<span><?php esc_html_e( 'back up', 'the-marketing-co' ); ?></span>
						</a>
					</div><!-- back-to-top -->
				</div><!-- foo-payment-back-top -->
			</div><!-- container -->
		</div><!-- footer-top -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-8">
						<div class="copyright">
						<?php if ( $copyright_text = get_field( 'copyright_text', 'options' ) ) : ?>
							<p><?php echo __( 'Copyright ', 'the-marketing-co' ).date( 'Y' )." ".$copyright_text.'</p>'; ?>
						<?php endif; ?>
						</div><!-- copyright -->
					</div><!-- col-md-8 -->
					<div class="col-md-4">
						<?php 
						$site_by_text = get_field( 'site_by_text', 'options' );
						$agency_logo = get_field( 'agency_logo', 'options' );
						?>
						<div class="designed-by text-right">
							<?php if ( $site_by_text || $agency_logo ) :  ?>
								<p>
									<span><?php echo esc_html( $site_by_text ); ?></span>
									<a href="https://themarketingco.com.au/" target="_blank">
										<?php echo wp_get_attachment_image( $agency_logo, 'full' );?>
									</a>
								</p>
							<?php endif; ?>
						</div><!-- copyright -->
					</div><!-- col-md-4 -->
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- footer-bottom -->
	</footer><!-- site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>