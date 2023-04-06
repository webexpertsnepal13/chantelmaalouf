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
                <div class="col-md-3">
                    <div class="title">
                        <h3>Our services.</h3>
                    </div><!-- title -->
                </div><!-- col-md-3 -->
            </div>
        </div>
    </section>
</main><!-- #main -->
<?php
get_footer();