<?php 
/**
 * FAQ section
 */
?>
<section class="faq-section">
    <div class="container">
        <div class="faq-wrapper">
            <!-- <h2 class="faq-title">Faq's</h2> -->
            <?php if ( have_rows( 'faq_lists' ) ) : ?>
                <div class="content-inner">
                    <?php while ( have_rows( 'faq_lists' ) ) :
                        the_row(); ?>
                        <div class="inner">
                            <div class="title">
                                <?php if ( $faq_title = get_sub_field( 'faq_title' ) ) : ?>
                                    <h3><?php echo esc_html( $faq_title ); ?></h3>
                                <?php endif; ?>
                            </div>
                            <div class="content">
                                <?php if ( $faq_content = get_sub_field( 'faq_content' ) ) : ?>
                                    <p><?php echo $faq_content; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>