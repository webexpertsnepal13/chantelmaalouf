<?php

/**
 * New landing page template
 * Template Name: About Page Template
 */
get_header();
?>
<?php
$page_id = get_option('page_on_front');
display_chantel_section( $page_id );
?>

<?php

//Flexible content
if ( have_rows ( 'add_site_layout' ) ) :
    while ( have_rows ( 'add_site_layout' ) ) : the_row();
        $layouts = get_row_layout ();
        get_template_part( 'template-parts/flexible-content/'. $layouts );
    endwhile;
endif;

?>

<?php
get_footer();
?>