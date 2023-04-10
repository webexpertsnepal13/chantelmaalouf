<?php

/**
 * FAQ section
 */
?>
<section class="faq-section">
    <div class="container">
        <div class="accordion-wrap">
            <?php if (have_rows('faq_lists')) : ?>
                <?php while (have_rows('faq_lists')) :
                    the_row(); ?>
                    <div class="accordion-list">
                        <div class="title">
                            <?php if ($faq_title = get_sub_field('faq_title')) : ?>
                                <h4><?php echo esc_html($faq_title); ?></h4>
                            <?php endif; ?>
                        </div>
                        <div class="content">
                            <?php if ($faq_content = get_sub_field('faq_content')) : ?>
                                <p><?php echo $faq_content; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>