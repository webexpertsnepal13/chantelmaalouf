<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

get_header();

$shop_page_id = get_option( 'woocommerce_shop_page_id' );
//Flexible content
if ( have_rows ( 'add_site_layout', $shop_page_id  ) ) :
    while ( have_rows ( 'add_site_layout', $shop_page_id  ) ) : the_row();
        $layouts = get_row_layout ();
        get_template_part( 'template-parts/flexible-content/'. $layouts );
    endwhile;
endif;

get_footer();