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

</main><!-- #main -->
<?php
get_footer();