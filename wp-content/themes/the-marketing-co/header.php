<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Marketing_Co
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'the-marketing-co' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="header-wrap">
				<div class="site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$the_marketing_co_description = get_bloginfo( 'description', 'display' );
					if ( $the_marketing_co_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $the_marketing_co_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'the-marketing-co' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'walker'         => new Maalouf_Nav_Walker()
						)
					);
					?>
				</nav><!-- #site-navigation -->
				<div class="header-right">
					<div class="header-right-inner">
						<?php $link = get_field( 'book_now_title', 'options' ); ?>
						<div class="button-wrap">
							<?php
							if ( $link ) :
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn-book-now"><?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
						</div><!-- button-wrap -->
						<div class="header-cart">
							<?php
							$cart_url = wc_get_cart_url();

							if ( $cart_url ) {
							?>
								<a href="<?php echo esc_url( $cart_url ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/shopping-bag.png" alt=""></a>
							<?php } ?>
						</div><!-- header-cart -->
					</div><!-- header-right-inner -->
				</div><!-- header-right -->
			</div><!-- header-wrap -->
		</div><!-- container -->
	</header><!-- #masthead -->
