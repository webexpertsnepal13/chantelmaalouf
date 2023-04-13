<?php
/**
 * All the custom functions goes here 
 */

//Chantel malouf full details page:
function display_chantel_section( $page_id ) {
    if ( have_rows ( 'add_site_layout', $page_id  ) ) :
        while ( have_rows ( 'add_site_layout', $page_id  ) ) : the_row(); 
            if ( get_row_layout() == 'meet_chantel_section' ) {
                $chantel_image = get_sub_field( 'chantel_image', $page_id );
                $size = 'full';
                $chantel_title = get_sub_field( 'chantel_title', $page_id );
                $chantel_content = get_sub_field( 'chantel_content', $page_id );
                ?>
                <section class="about-section">
                    <div class="container">
                        <div class="about-wrapper">
                            <div class="row">
                                <div class="col-md-6 col-lg-7 cols">
                                    <div class="thumbnail-wrapper">
                                        <div class="about-thumbnail anim-cln fadeIn">
                                            <?php 
                                            if ( $chantel_image ) {
                                                echo wp_get_attachment_image( $chantel_image, $size );
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-5 cols">
                                    <div class="content-inner-wrapper">
                                        <div class="about-title anim-cln fadeinUp">
                                            <?php if ( $chantel_title ) :  ?>
                                                <h3><?php echo esc_html( $chantel_title ); ?></h3>
                                            <?php endif; ?>
                                        </div>
                                        <div class="about-content anim-cln fadeinUp">
                                            <?php if ( $chantel_content ):
                                                echo $chantel_content;
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .container -->
                </section><!-- .about-section -->
                <?php
            } 
        endwhile; 
    endif;  
}

//disable the search functionality from the page
function disable_search_page() {
    if(is_search()) {
        wp_redirect(home_url());
        exit;
    }
}
add_action('template_redirect', 'disable_search_page');