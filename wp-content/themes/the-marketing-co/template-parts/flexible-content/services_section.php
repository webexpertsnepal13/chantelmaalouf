<?php 
/**
 * Homepage Services section
 */

$our_services = get_sub_field( 'our_services' );
$service_posts = get_sub_field( 'services_list' );
?>
<section class="section-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="title w-brush anim-cln fadeinUp">
                        <?php if ( $our_services ) :  ?>
                            <h3><span><?php echo esc_html( $our_services ); ?></span></h3>
                        <?php endif; ?>
                    </div><!-- title -->
                </div><!-- col-md-4 -->
                <div class="col-md-8">
                    <?php
                    if ( $service_posts ) { ?>
                        <div class="services-grid">
                            <?php foreach( $service_posts as $post ) { ?>
                                <div class="service-card anim-cln fadeinUp">
                                    <div class="card-inner">
                                        <div class="card-image">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail(); ?>
                                            </a>
                                        </div><!-- card-image -->
                                        <div class="button-wrap">
                                            <a href="<?php the_permalink(); ?>" class="btn-cm btn-outline"><?php the_title(); ?></a>
                                        </div><!-- button-wrap -->
                                    </div><!-- card-inner -->
                                </div><!-- service-card -->
                            <?php } wp_reset_postdata(); ?>
                        </div><!-- services-grid -->
                    <?php } ?>
                </div><!-- col-md-8 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- section-services -->