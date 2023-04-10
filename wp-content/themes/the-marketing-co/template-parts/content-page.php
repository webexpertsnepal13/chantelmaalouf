<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Marketing_Co
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="container">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</div><!-- .container -->
	</header><!-- .entry-header -->

	<?php the_marketing_co_post_thumbnail(); ?>

	<div class="entry-content">
		<div class="container">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__('Pages:', 'the-marketing-co'),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .container -->
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->