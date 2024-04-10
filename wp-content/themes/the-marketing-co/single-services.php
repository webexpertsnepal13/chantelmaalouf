<?php get_header(); ?>

<section class="single-service-section">
    <div class="container">
        <div class="single-service-wrapper">
            <div class="product-title mobile-view">
                <h3> <?php the_title(); ?> </h3>
            </div>
            <div class="row">
                <div class="col-md-6 product-cols">
                    <div class="product-thumb anim-cln fadeIn">
                        <?php
                        the_post_thumbnail();
                        ?>
                    </div>
                </div>
                <div class="col-md-6 product-colx">
                    <div class="content-wrapper">
                        <div class="product-title">
                            <h3 class="anim-cln fadeinUp"> <?php the_title(); ?> </h3>
                        </div>
                        <div class="product-content anim-cln fadeinUp">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .single-service-wrapper -->
    </div><!-- .container -->
</section><!-- .single-service-section -->
<?php get_footer(); ?>