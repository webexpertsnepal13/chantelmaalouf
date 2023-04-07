<?php

/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package The_Marketing_Co
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)
 * @link https://github.com/woocommerce/woocommerce/wiki/Declaring-WooCommerce-support-in-themes
 *
 * @return void
 */
function the_marketing_co_woocommerce_setup()
{
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 150,
			'single_image_width'    => 300,
			'product_grid'          => array(
				'default_rows'    => 3,
				'min_rows'        => 1,
				'default_columns' => 4,
				'min_columns'     => 1,
				'max_columns'     => 6,
			),
		)
	);
	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'the_marketing_co_woocommerce_setup');

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function the_marketing_co_woocommerce_scripts()
{
	wp_enqueue_style('the-marketing-co-woocommerce-style', get_template_directory_uri() . '/woocommerce.css', array(), _S_VERSION);

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style('the-marketing-co-woocommerce-style', $inline_font);
}
add_action('wp_enqueue_scripts', 'the_marketing_co_woocommerce_scripts');

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function the_marketing_co_woocommerce_active_body_class($classes)
{
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter('body_class', 'the_marketing_co_woocommerce_active_body_class');

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function the_marketing_co_woocommerce_related_products_args($args)
{
	$defaults = array(
		'posts_per_page' => 3,
		'columns'        => 3,
	);

	$args = wp_parse_args($defaults, $args);

	return $args;
}
add_filter('woocommerce_output_related_products_args', 'the_marketing_co_woocommerce_related_products_args');

/**
 * Remove default WooCommerce wrapper.
 */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

if (!function_exists('the_marketing_co_woocommerce_wrapper_before')) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function the_marketing_co_woocommerce_wrapper_before()
	{
?>
		<main id="primary" class="site-main">
		<?php
	}
}
add_action('woocommerce_before_main_content', 'the_marketing_co_woocommerce_wrapper_before');

if (!function_exists('the_marketing_co_woocommerce_wrapper_after')) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function the_marketing_co_woocommerce_wrapper_after()
	{
		?>
		</main><!-- #main -->
	<?php
	}
}
add_action('woocommerce_after_main_content', 'the_marketing_co_woocommerce_wrapper_after');

/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	<?php
		if ( function_exists( 'the_marketing_co_woocommerce_header_cart' ) ) {
			the_marketing_co_woocommerce_header_cart();
		}
	?>
 */

if (!function_exists('the_marketing_co_woocommerce_cart_link_fragment')) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function the_marketing_co_woocommerce_cart_link_fragment($fragments)
	{
		ob_start();
		the_marketing_co_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter('woocommerce_add_to_cart_fragments', 'the_marketing_co_woocommerce_cart_link_fragment');

if (!function_exists('the_marketing_co_woocommerce_cart_link')) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function the_marketing_co_woocommerce_cart_link()
	{
	?>
		<a class="cart-contents" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr_e('View your shopping cart', 'the-marketing-co'); ?>">
			<?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n('%d item', '%d items', WC()->cart->get_cart_contents_count(), 'the-marketing-co'),
				WC()->cart->get_cart_contents_count()
			);
			?>
			<span class="amount"><?php echo wp_kses_data(WC()->cart->get_cart_subtotal()); ?></span> <span class="count"><?php echo esc_html($item_count_text); ?></span>
		</a>
	<?php
	}
}

if (!function_exists('the_marketing_co_woocommerce_header_cart')) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function the_marketing_co_woocommerce_header_cart()
	{
		if (is_cart()) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
	?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr($class); ?>">
				<?php the_marketing_co_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);

				the_widget('WC_Widget_Cart', $instance);
				?>
			</li>
		</ul>
<?php
	}
}

/**
 * Move the short description below the cart
 */
// Remove the description section from its default location
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

// Add the description section below the add to cart button
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 35 );
add_filter( 'woocommerce_product_description_heading', '__return_false' );




// Remove shop page title
add_filter('woocommerce_show_page_title', '__return_false');

// Remove showing the single result text
add_filter('woocommerce_result_count', '__return_false');

// Remove sorting
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

// Change the "Select Option" text to "View Colors" for variable products on the shop page
add_filter('woocommerce_loop_add_to_cart_link', 'custom_variable_product_message', 10, 2);
function custom_variable_product_message($button, $product)
{
	if ($product->is_type('variable')) {
		$button_text = __("View Colors", "woocommerce");
		$button = '<a class="button" href="' . esc_url($product->get_permalink()) . '">' . $button_text . '</a>';
	}
	return $button;
}

// Change the text for the add to cart button to "Add to Bag"
add_filter('woocommerce_product_add_to_cart_text', 'custom_cart_button_text');
add_filter('woocommerce_product_single_add_to_cart_text', 'custom_cart_button_text');
add_filter('woocommerce_product_variation_add_to_cart_text', 'custom_cart_button_text');
function custom_cart_button_text($text)
{
	$text = __('Add to Bag', 'woocommerce'); // Update the text for the add to cart button
	return $text;
}

// Remove SKU from product page
add_filter('wc_product_sku_enabled', '__return_false');

// Remove product categories from product page
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

// Remove additional information and review tab from product page
add_filter('woocommerce_product_tabs', 'remove_product_tabs', 98);
function remove_product_tabs($tabs)
{
	unset($tabs['additional_information']);
	unset($tabs['reviews']);
	return $tabs;
}

// Remove related products from product page
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);

add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_home_text' );
function wcc_change_breadcrumb_home_text( $defaults ) {
    // Change the breadcrumb home text from 'Home' to 'Apartment'
	$defaults['delimiter'] = '';
	$defaults['wrap_before'] = '<div class="custom-breadcrumb"><nav class="woocommerce-breadcrumb"><ul>';
	$defaults['wrap_after'] = '</ul></nav></div>';
	$defaults['before'] = '<li>';
	$defaults['after'] = '</li>';
	return $defaults;
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

add_action( 'woocommerce_before_single_product', 'woocommerce_breadcrumb', 10 );


add_action( 'woocommerce_before_main_content', 'add_custom_wrapper_open_to_main_content', 10 );
function add_custom_wrapper_open_to_main_content() {
    echo '<section class="section-products-list">';
}

add_action( 'woocommerce_after_main_content', 'add_custom_wrapper_close_to_main_content', 15 );
function add_custom_wrapper_close_to_main_content() {
    echo '</section>';
}