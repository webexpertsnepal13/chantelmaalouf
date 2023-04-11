<?php 
/**
 * Home page every shade section
 */

$shade_title = get_sub_field( 'shade_title' );
$shade_image = get_sub_field( 'shade_image' );
$size = 'full';
?>
<section class="section-info-w-image">
    <div class="section-wrapper">
        <div class="info-block-left">
            <div class="info-block">
                <?php if ( $shade_title ) { ?>
                    <h1 class="anim-cln fadeinUp" data-wow-duration="0.7s"><?php echo $shade_title; ?></h1>
                <?php } ?>
                <div class="bg-logo anim-cln fadeIn" data-wow-duration="0.8s">
                    <?php the_custom_logo(); ?>
                </div><!-- bg-logo -->
            </div>
        </div><!-- info-block-left -->
        <div class="image-right anim-cln fadeIn">
            <?php if ( $shade_image ) {
              echo wp_get_attachment_image( $shade_image, $size );
            }
            ?>
        </div><!-- iamge-right -->
    </div><!-- section-wrapper -->
</section><!-- section-info-w-image -->