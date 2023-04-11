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
            <div class="image-left anim-cln fadeIn" data-wow-duration="0.8s">
                <?php if ( $chantel_image ) {
                    echo wp_get_attachment_image( $chantel_image, $size );
                } 
                ?>
            </div><!-- image-left -->
            <div class="content-right">
                <div class="content-inner anim-cln fadeinUp" data-wow-duration="0.8s">
                    <?php  if ( $chantel_title ) { ?>
                        <h2><?php  echo esc_html( $chantel_title ); ?></h2>
                    <?php } 
                    
                    if ( $chantel_content ) {
                        // Get all the <p> tags in the content
                        preg_match_all('/<p>(.*?)<\/p>/', $chantel_content, $matches);
                    
                        // Get the last <p> tag and extract its text content
                        $last_p = end($matches[1]);
                        $words = explode(' ', $last_p);
                        $num_words = count($words);
                        $shortened = implode(' ', array_slice( $words, $num_words - 40, 40 ));
                    
                        // Output the shortened content inside a <p> tag
                        echo '<p>' . $shortened . '</p>';
                    }
                                                         
                    ?>
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