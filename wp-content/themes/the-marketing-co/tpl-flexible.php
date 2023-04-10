<?php
/**
 * Template Name: Flexible Template
*/

get_header();

//Flexible content
if ( have_rows ( 'add_site_layout' ) ) :
    while ( have_rows ( 'add_site_layout' ) ) : the_row();
        $layouts = get_row_layout ();
        get_template_part( 'template-parts/flexible-content/'. $layouts );
    endwhile;
endif;

get_footer();
?>