<?php 
/**
 * Sip and learn section
 */

$section_right_image = get_sub_field( 'section_right_image' );
?>
<section class="sip-learn-section">
    <div class="container">
        <div class="sip-learn-wrapper">
            <div class="row">
                <div class="col-md-6 cols">
                    <div class="sip-learn-content-wrap">
                        <div class="title anim-cln fadeinUp" data-wow-duration="0.7s">
                            <?php if ( $section_title = get_sub_field( 'section_title' ) ) : ?>
                                <h2><?php echo esc_html( $section_title ); ?></h2>
                            <?php endif; ?>
                        </div>
                        <div class="inner anim-cln fadeinUp" data-wow-duration="0.8s">
                            <?php if ( $section_content = get_sub_field( 'section_content' ) ) : ?>
                                <?php echo $section_content; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 cols">
                    <div class="sip-learn-thumbnail anim-cln fadeIn" data-wow-duration="0.7s"">
                        <?php echo wp_get_attachment_image( $section_right_image, 'full' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- .sip-learn-section -->