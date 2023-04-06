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
    <section class="section-about-cm">
        <div class="bg-logo">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/04/Chantel_Maalouf_Logo_updated.png" alt="">
        </div><!-- bg-logo -->
        <div class="container">
            <div class="section-wrapper">
                <div class="image-left">
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/04/women-w-whitedress.jpg" alt="">
                </div><!-- image-left -->
                <div class="content-right">
                    <div class="content-inner">
                        <h2>Meet Chantel Maalouf.</h2>
                        <p>
                            Chantel has worked for many luxury brands including Chanel and has been involved in the glam team backstage for many fashion shows. She has a wealth of knowledge and experience when it comes to all thing’s hair, skin and beauty
                        </p>
                        <div class="button-wrap">
                            <a href="#" class="btn-cm btn-outline btn-fill-white">Learn More</a>
                        </div><!-- button-wrap -->
                    </div><!-- content-inner -->
                </div><!-- content-right -->
            </div><!-- section-wrapper -->
        </div><!-- container -->
    </section><!-- section-image-w-content -->
    <section class="section-info-w-image">
        <div class="section-wrapper">
            <div class="info-block-left">
                <div class="info-block">
                    <h1>Every <span>shade</span>.<br> For <span>every look.</span></h1>
                    <div class="bg-logo">
                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/04/Chantel_Maalouf_Logo_updated.png" alt="">
                    </div><!-- bg-logo -->
                </div>
            </div><!-- info-block-left -->
            <div class="image-right">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/04/arms-w-colors.jpg" alt="">
            </div><!-- iamge-right -->
        </div><!-- section-wrapper -->
    </section><!-- section-info-w-image -->
</main><!-- #main -->
<?php
get_footer();