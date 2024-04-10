<?php 
/**
 *  Home Google reviews section
 */

$google_reviews_title = get_sub_field( 'google_reviews_title' );
$google_reviews_shortcode = get_sub_field( 'google_reviews_shortcode' );
?>
<section class="section-google-reviews">
    <div class="container">
        <div class="title w-brush brush-2x text-center anim-cln fadeinUp">
            <?php if ( $google_reviews_title ) { ?>
                <h2><?php echo $google_reviews_title; ?></h2>
            <?php } ?>
        </div><!-- title -->
        <div class="google-reviews-wrapper anim-cln fadeinUp">
            <?php   
            if ( $google_reviews_shortcode ) {
                echo do_shortcode( $google_reviews_shortcode );
            }
            ?>
        </div><!-- google-reviews-wrapper -->
    </div><!-- container -->
</section><!-- section-google-reviews -->