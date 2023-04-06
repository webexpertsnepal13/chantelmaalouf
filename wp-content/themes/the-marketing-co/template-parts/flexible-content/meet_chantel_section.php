<?php
/**
 * Homepage meet chantel section
 */

$chantel_image = get_sub_field( 'chantel_image' );
$size = 'full';
$chantel_title = get_sub_field( 'chantel_title' );
$chantel_content = get_sub_field( 'chantel_content' );
$Chantel_link = get_sub_field( 'chantel_link' );
?>

<section class="section-about-cm">
    <div class="bg-logo">
        <?php the_custom_logo(); ?>
    </div><!-- bg-logo -->
    <div class="container">
        <div class="section-wrapper">
            <div class="image-left">
                <?php if ( $chantel_image ) {
                    echo wp_get_attachment_image( $chantel_image, $size );
                } 
                ?>
            </div><!-- image-left -->
            <div class="content-right">
                <div class="content-inner">
                    <?php  if ( $chantel_title ) { ?>
                        <h2><?php  echo esc_html( $chantel_title ); ?></h2>
                    <?php } 
                    
                    if ( $chantel_content ) {
                    ?>
                        <p><?php echo esc_html( $chantel_content ); ?></p>
                    <?php } ?>
                    <div class="button-wrap">
                        <?php
                        if ( $Chantel_link ) :
                            $clink_url = $Chantel_link['url'];
                            $clink_title = $Chantel_link['title'];
                            $clink_target = $Chantel_link['target'] ? $Chantel_link['target'] : '_self';
                            ?>
                            <a href="<?php echo esc_url( $clink_url ); ?>" target="<?php echo esc_attr( $clink_target ); ?>" class="btn-cm btn-outline btn-fill-white"><?php echo esc_html( $clink_title ); ?></a>
                        <?php endif; ?>
                    </div><!-- button-wrap -->
                </div><!-- content-inner -->
            </div><!-- content-right -->
        </div><!-- section-wrapper -->
    </div><!-- container -->
</section><!-- section-image-w-content -->