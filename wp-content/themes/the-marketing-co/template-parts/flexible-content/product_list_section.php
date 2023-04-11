<?php 
/**
 *  Home Page Product List section
 */

$product_title = get_sub_field( 'product_title' );
?>
<section class="section-products">
    <div class="container">
        <div class="title w-brush brush-2x text-center anim-cln fadeinUp" data-wow-dutration="0.7s" >
            <?php if ( $product_title ) { ?>
                <h2><?php echo $product_title; ?></h2>
            <?php } ?>
        </div><!-- title -->
        <div class="product-wrapper anim-cln fadeinUp" data-wow-dutration="0.8s">
            <?php echo do_shortcode( '[products]' ); ?>
        </div><!-- product-wrapper -->
    </div><!-- container -->
</section><!-- section-products -->