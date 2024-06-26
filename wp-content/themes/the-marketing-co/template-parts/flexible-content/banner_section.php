<?php
/**
 * Home Page Banner Section
 */
$banner_type = get_sub_field('banner_type');
$home_banner_image = get_sub_field('home_banner_image');
$home_banner_video = get_sub_field('home_banner_video');
?>
<section class="section-hero-banner">
    <?php if ($banner_type == "image"): ?>
        <div class="bg-image anim-cln fadeIn">
            <?php
            if ($home_banner_image) {
                echo wp_get_attachment_image($home_banner_image, 'full');
            }
            ;
            ?>
        </div><!-- bg-image -->
    <?php endif; ?>
    <?php if ($banner_type == "video"): ?>
        <div class="bg-image anim-cln fadeIn">
            <?php if($home_banner_video): ?>
                <video muted loop playsinline autoplay>
                    <source src="<?php echo esc_url($home_banner_video); ?>" type="video/mp4">
                    </video>
                <?php endif; ?>
            </div><!-- bg-image -->
        <?php endif; ?>
    </section><!-- section-hero-banner -->
