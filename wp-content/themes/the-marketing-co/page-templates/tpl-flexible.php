<?php
/**
 * Template Name: Flexible Template
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
?>