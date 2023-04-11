<?php
/**
 * The Marketing Co functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package The_Marketing_Co
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function the_marketing_co_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on The Marketing Co, use a find and replace
		* to change 'the-marketing-co' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'the-marketing-co', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'the-marketing-co' ),
			'menu-2' => esc_html__( 'Footer Menu-1', 'the-marketing-co' ),
			'menu-3' => esc_html__( 'Footer Menu-2', 'the-marketing-co' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'the_marketing_co_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'the_marketing_co_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_marketing_co_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'the_marketing_co_content_width', 640 );
}
add_action( 'after_setup_theme', 'the_marketing_co_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_marketing_co_widgets_init() {
	register_sidebar(
		array( 
			'name'          => esc_html__( 'Sidebar', 'the-marketing-co' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'the-marketing-co' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('Footer Menu 1', 'the-marketing-co'),
			'id'            => 'footer-sidebar-2',
			'before_widget'	=> '<div class="widget widget_text" id="%1$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h5 class="widget-title">',
			'after_title' 	=> '</h5>',
			'description'   => esc_html__('Add footer menu-1 here.', 'the-marketing-co'),			
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('Social Media Icons', 'the-marketing-co'),
			'id'            => 'footer-sidebar-3',
			'before_widget'	=> '<div class="widget widget_text" id="%1$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h5 class="widget-title">',
			'after_title' 	=> '</h5>',
			'description'   => esc_html__('Add Social Media Icons & links here.', 'the-marketing-co'),			
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('Footer Menu 2', 'the-marketing-co'),
			'id'            => 'footer-sidebar-4',
			'before_widget'	=> '<div class="widget widget_text" id="%1$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h5 class="widget-title">',
			'after_title' 	=> '</h5>',
			'description'   => esc_html__('Add footer menu-2 here.', 'the-marketing-co'),			
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('Payments Icons', 'the-marketing-co'),
			'id'            => 'footer-sidebar-5',
			'before_widget'	=> '<div class="widget widget_text" id="%1$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h5 class="widget-title">',
			'after_title' 	=> '</h5>',
			'description'   => esc_html__('Add Social payment Icons & links here.', 'the-marketing-co'),			
		)
	);
	
}
add_action( 'widgets_init', 'the_marketing_co_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function the_marketing_co_scripts() {

	$min = ( SCRIPT_DEBUG === false )  ?  ''  :  '.min';
	$ver = wp_get_theme()->get( 'Version' );

	$main_css  = 'assets/css/main' . $min . '.css';
	$main_js   = 'assets/js/main' . $min . '.js';
	$vendor_js = 'assets/js/vendor' . $min . '.js';


   //Google Fonts
	
   	wp_enqueue_style( 'the-marketing-co-style', get_stylesheet_uri(), array(), $ver );
	wp_style_add_data( 'the-marketing-co-style', 'rtl', 'replace' );

	// the-marketing-co Main Style
	wp_register_style( 'the-marketing-co-main-style', get_template_directory_uri() . '/' . $main_css, '', $ver );
	wp_enqueue_style( 'the-marketing-co-main-style' );

	/* Vendor JS */
	wp_register_script( 'the-marketing-co-vendor-script', get_template_directory_uri() . '/' . $vendor_js, array( 'jquery' ), $ver, true );
	wp_enqueue_script( 'the-marketing-co-vendor-script' );

	// the-marketing-co Main JS
	wp_register_script( 'the-marketing-co-main-js', get_template_directory_uri() . '/' . $main_js, array( 'jquery' ), $ver, true );
	wp_enqueue_script( 'the-marketing-co-main-js' );

	wp_enqueue_script( 'plus-minus-quantity', get_stylesheet_directory_uri() . '/js/plus-minus-quantity.js', array( 'jquery' ), false, true );

	wp_enqueue_style( 'the-marketing-co-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'the-marketing-co-style', 'rtl', 'replace' );

	wp_enqueue_script( 'the-marketing-co-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'the_marketing_co_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Custom post type for the theme
 */
require get_template_directory() . '/inc/custom-post-type.php';

/**
 * ACF options page
 */
require get_template_directory() . '/inc/acf-options-page.php';

/**
 * Custom Walker Nav
 */
require get_template_directory() . '/inc/class-chantelmaalouf-nav-walker.php';

//fluent form custom submit button
function fluent_form_custom_submit_button( $button, $form ) {
	$button_text = 'Submit';
	$button = '<button class="btn-cm btn-outline" id="gform_submit_button_1" type="submit" value="' . $button_text . '">' . $button_text . '</button>';
	return $button;
 }
 add_filter( 'gform_submit_button', 'fluent_form_custom_submit_button', 10, 2 ); 

//Chantel malouf full details page:
function display_chantel_section( $page_id ) {
    if ( have_rows ( 'add_site_layout', $page_id  ) ) :
        while ( have_rows ( 'add_site_layout', $page_id  ) ) : the_row(); 
            if ( get_row_layout() == 'meet_chantel_section' ) {
                $chantel_image = get_sub_field( 'chantel_image', $page_id );
                $size = 'full';
                $chantel_title = get_sub_field( 'chantel_title', $page_id );
                $chantel_content = get_sub_field( 'chantel_content', $page_id );
                ?>
                <section class="about-section">
                    <div class="container">
                        <div class="about-wrapper">
                            <div class="row">
                                <div class="col-md-6 col-lg-7 cols">
                                    <div class="thumbnail-wrapper">
                                        <div class="about-thumbnail anim-cln fadeIn">
                                            <?php 
                                            if ( $chantel_image ) {
                                                echo wp_get_attachment_image( $chantel_image, $size );
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-5 cols">
                                    <div class="content-inner-wrapper">
                                        <div class="about-title anim-cln fadeinUp">
                                            <?php if ( $chantel_title ) :  ?>
                                                <h3><?php echo esc_html( $chantel_title ); ?></h3>
                                            <?php endif; ?>
                                        </div>
                                        <div class="about-content anim-cln fadeinUp">
                                            <?php if ( $chantel_content ):
                                                echo $chantel_content;
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .container -->
                </section><!-- .about-section -->
                <?php
            } 
        endwhile; 
    endif;  
}
