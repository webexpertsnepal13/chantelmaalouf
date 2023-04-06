<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package the-marketing-co
 */

get_header();
?>
<main id="primary" class="site-main">
    <?php
    //Flexible content
    if ( have_rows ( 'add_site_layout' ) ) :
        while ( have_rows ( 'add_site_layout' ) ) : the_row();
            $layouts = get_row_layout ();
            get_template_part( 'template-parts/flexible-content/'. $layouts );
        endwhile;
    endif;

    ?>
    <section class="section-hero-banner">
        <div class="bg-image">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/04/eye-liner.jpg" alt="">
        </div><!-- bg-image -->
    </section><!-- section-hero-banner -->

    <section class="section-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="title w-brush">
                        <h3><span>Our services.</span></h3>
                    </div><!-- title -->
                </div><!-- col-md-4 -->
                <div class="col-md-8">
                    <div class="services-grid">
                        <div class="service-card">
                            <div class="card-inner">
                                <div class="card-image">
                                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/04/lips.jpg" alt="">
                                </div><!-- card-image -->
                                <div class="button-wrap">
                                    <a href="#" class="btn-cm btn-outline">Bridal Makeup</a>
                                </div><!-- button-wrap -->
                            </div><!-- card-inner -->
                        </div><!-- service-card -->
                        <div class="service-card">
                            <div class="card-inner">
                                <div class="card-image">
                                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/04/women-fully-makeup-scaled.jpg" alt="">
                                </div><!-- card-image -->
                                <div class="button-wrap">
                                    <a href="#" class="btn-cm btn-outline">Bridal Makeup</a>
                                </div><!-- button-wrap -->
                            </div><!-- card-inner -->
                        </div><!-- service-card -->
                        <div class="service-card">
                            <div class="card-inner">
                                <div class="card-image">
                                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/04/armpit.jpg" alt="">
                                </div><!-- card-image -->
                                <div class="button-wrap">
                                    <a href="#" class="btn-cm btn-outline">Bridal Makeup</a>
                                </div><!-- button-wrap -->
                            </div><!-- card-inner -->
                        </div><!-- service-card -->
                        <div class="service-card">
                            <div class="card-inner">
                                <div class="card-image">
                                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/04/girl-on-makeup.jpg" alt="">
                                </div><!-- card-image -->
                                <div class="button-wrap">
                                    <a href="#" class="btn-cm btn-outline">Bridal Makeup</a>
                                </div><!-- button-wrap -->
                            </div><!-- card-inner -->
                        </div><!-- service-card -->
                        <div class="service-card">
                            <div class="card-inner">
                                <div class="card-image">
                                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/04/eye.jpg" alt="">
                                </div><!-- card-image -->
                                <div class="button-wrap">
                                    <a href="#" class="btn-cm btn-outline">Bridal Makeup</a>
                                </div><!-- button-wrap -->
                            </div><!-- card-inner -->
                        </div><!-- service-card -->
                        <div class="service-card">
                            <div class="card-inner">
                                <div class="card-image">
                                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/04/sunbath.jpg" alt="">
                                </div><!-- card-image -->
                                <div class="button-wrap">
                                    <a href="#" class="btn-cm btn-outline">Bridal Makeup</a>
                                </div><!-- button-wrap -->
                            </div><!-- card-inner -->
                        </div><!-- service-card -->
                    </div><!-- services-grid -->
                </div><!-- col-md-8 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- section-services -->
</main><!-- #main -->
<?php
get_footer();