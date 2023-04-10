<?php 
/**
 * Innerpage Banner section
 */

$link = get_field( 'button_text_and_link' ); //appoinment button text
?>
<section class="inner-banner-section">
    <div class="container">
        <div class="inner-banner-wrap">
            <div class="inner-banner-title">
                <?php if ( $heading_text = get_field( 'heading_text' ) ) : ?>
                    <h1><?php echo esc_html( $heading_text ); ?></h1>
                <?php endif; ?>
            </div>
            <div class="button-wrap">
                <?php
                if ( $link ) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn-cm btn-outline"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>