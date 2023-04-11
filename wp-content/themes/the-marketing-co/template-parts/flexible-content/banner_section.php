<?php 
/**
 * Home Page Banner Section
 */

$home_banner_image = get_sub_field( 'home_banner_image' );
$size = 'full';
?>

<section class="section-hero-banner">
    <div class="bg-image anim-cln fadeIn" data-wow-duration="0.2s">
        <?php
        if ( $home_banner_image ) {
            echo wp_get_attachment_image( $home_banner_image, $size );
        };
        ?>
    </div><!-- bg-image -->
</section><!-- section-hero-banner -->