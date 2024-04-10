<?php 
/**
 *  Home Instagram Feed section
 */

$follow_us_text = get_sub_field( 'follow_us_text' );
$feed_shortcode = get_sub_field( 'feed_shortcode' );
?>
<section class="section-instagram">
    <div class="container">
        <div class="title w-brush brush-2x text-center anim-cln fadeinUp">
            <?php if ( $follow_us_text ) { ?>
                <h2><?php echo $follow_us_text; ?></h2>
            <?php } ?>
        </div><!-- title -->
        <div class="instagram-wrapper anim-cln fadeinUp">
            <?php   
            if ( $feed_shortcode ) {
                echo do_shortcode( $feed_shortcode );
            }
            ?>
        </div><!-- instagram-wrapper -->
    </div><!-- container -->
</section><!-- section-instagram -->