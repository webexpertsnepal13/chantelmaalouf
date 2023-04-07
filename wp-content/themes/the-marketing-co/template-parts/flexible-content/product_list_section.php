<?php 
/**
 *  Home Page Product List section
 */

$product_title = get_sub_field( 'product_title' );
?>
<section class="section-products">
    <div class="container">
        <div class="title w-brush brush-2x text-center">
            <?php if ( $product_title ) { ?>
                <h2><?php echo $product_title; ?></h2>
            <?php } ?>
        </div><!-- title -->
    </div><!-- container -->
</section><!-- section-products -->



<?php echo do_shortcode( '[products]' ); ?>