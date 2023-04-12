<?php 
/**
 * Innerpage Banner section
 */

$link = get_sub_field( 'button_text_and_link' ); //appoinment button text
$heading_text = get_sub_field( 'heading_text' );
?>
<section class="inner-banner-section">
    <div class="container">
        <div class="inner-banner-wrap">
            <div class="inner-banner-title anim-cln fadeinUp">
                <?php if ( $heading_text ) : ?>
                    <h1><?php echo esc_html( $heading_text ); ?></h1>
                <?php endif; ?>
            </div>
            <?php 
            if ( $link ) : ?>
                <div class="button-wrap anim-cln fadeinUp">
                    <?php
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn-cm btn-outline"><?php echo esc_html( $link_title ); ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>