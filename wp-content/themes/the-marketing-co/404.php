<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package The_Marketing_Co
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<header class="page-header">
			<div class="container">
			<h1 class="page-title"><?php esc_html_e('Not Found', 'the-marketing-co'); ?></h1>
			</div><!-- .container -->
		</header><!-- .page-header -->

		<div class="page-content">
			<div class="container">
				<p><?php esc_html_e('Sorry, but the page you were trying to view does not exist.', 'the-marketing-co'); ?></p>
				<a href="<?php echo home_url();?>" class="btn-cm btn-outline"><?php esc_html_e( 'Go back to home', 'the-marketing-co' ); ?></a>
				<?php
				//get_search_form();
				?>
			</div><!-- .container -->
		</div><!-- .page-content -->
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
