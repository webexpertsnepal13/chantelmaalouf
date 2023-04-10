<?php

/**
 * New landing page template
 * Template Name: Contact Page Template
 */
get_header();

//Flexible content
if ( have_rows ( 'add_site_layout' ) ) :
    while ( have_rows ( 'add_site_layout' ) ) : the_row();
        $layouts = get_row_layout ();
        get_template_part( 'template-parts/flexible-content/'. $layouts );
    endwhile;
endif;
?>
<section class="title-content-section">
    <div class="container">
        <div class="title-content-wrap">
            <div class="row">
                <div class="col-lg-6 cols">
                    <div class="title">
                        <?php if ( $contact_left_title = get_field( 'contact_left_title' ) ) : ?>
                            <h3><?php echo esc_html( $contact_left_title ); ?></h3>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6 cols">
                    <div class="inner-content">
                        <?php if ( $contact_right_title = get_field( 'contact_right_title' ) ) : ?>
                            <p><?php echo esc_html( $contact_right_title ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- .title-content-section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-wrapper">
            <div class="row">
                <div class="col-lg-6 contact-cols">
                    <div class="form-container">
                        <div class="form-wrapper">
                            <div class="form-title">
                                <?php if ( $contact_form_title = get_field( 'contact_form_title' ) ) : ?>
                                    <h3><?php echo esc_html( $contact_form_title ); ?></h3>
                                <?php endif; ?>
                            </div>
                            <?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 contact-cols right-col">
                    <div class="info-container">
                        <div class="row">
                            <div class="col-xl-5 col-lg-12 info-cols">
                                <div class="hours-wrap">
                                    <?php if ( $contact_hours = get_field( 'contact_hours' ) ) : ?>
                                        <?php echo $contact_hours; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-xl-7 col-sm-6  info-cols">
                                <?php 
                                $address_title = get_field( 'address_title' ); 
                                $address = get_field( 'address' );
                                ?>
                                <div class="address-wrap">
                                    <?php 
                                    if ( $address_title ) {
                                    ?>
                                        <h3><?php echo esc_html( $address_title ); ?></h3>
                                        <?php 
                                    }

                                    if ( $address ) {
                                    ?>
                                        <p><?php echo esc_html( $address ); ?></p>
                                        <?php 
                                    } ?>
                                </div>
                            </div>
                            <div class="col-xl-5 col-sm-6 info-cols">
                                <?php 
                                $phone_title = get_field( 'phone_title' );
                                $phone = get_field( 'phone' );
                                ?>
                                <div class="phone-wrap">
                                    <?php 
                                    if ( $phone_title ) { 
                                        ?>
                                        <h3><?php echo esc_html( $phone_title ); ?></h3>
                                        <?php
                                    }

                                    if ( $phone ) {
                                        $phone_formatted = preg_replace( '/[^0-9]/', '', $phone ); // remove any non-numeric characters from the phone number
                                        ?>
                                        <p><a href="tel:<?php echo $phone_formatted; ?>"><?php echo $phone_formatted; ?></a></p>
                                        <?php 
                                    } 
                                    ?>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-12 info-cols">
                                <?php 
                                $email_title = get_field( 'email_title' );
                                $email = get_field( 'email' ); 
                                ?>
                                <div class="email-wrap">
                                    <?php 
                                    if ( $email_title ) {
                                    ?>
                                        <h3>Email</h3>
                                        <?php 
                                    }
                                    
                                    if ( $email ) {
                                    ?>
                                        <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
                                        <?php 
                                    } 
                                    ?>
                                </div>
                            </div>
                            <div class="col-sm-12 info-cols">
                                <div class="social-link-container">
                                    <h3>Follow Us On Instagram & Facebook</h3>
                                    <ul class="social-link">
                                        <li class="social-link-menu"><a href="https://www.instagram.com/chantelmaalouf.mua/">Instagram</a></li>
                                        <li class="social-link-menu"><a href="https://www.facebook.com/chantelmaaloufmua/">Facebook</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>