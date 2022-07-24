<?php

function naajihun_theme_setup() {
    //Load text Domain
    load_theme_textdomain('naajihun_theme', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    //Title tag
    add_theme_support('title-tag');

    //Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'mainmenu' => esc_html__('Main Menu', 'naajihun_theme'),
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

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    //Add support for core custom logo.
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 80,
            'width'       => 220,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action('after_setup_theme', 'naajihun_theme_setup');

/**
 * Enqueue scripts and styles.
 */

function naajihun_theme_scripts() {

    //css file

    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap');
    wp_enqueue_style('bootstrap-css', get_theme_file_uri('assets/css/bootstrap.min.css'));
    wp_enqueue_style('fontawesome-css', get_theme_file_uri('assets/css/all.min.css'));
    wp_enqueue_style('animate-css', get_theme_file_uri('assets/css/animate.min.css'));
    wp_enqueue_style('magnific-popup-css', get_theme_file_uri('assets/css/magnific-popup.css'));
    wp_enqueue_style('meanmenu-css', get_theme_file_uri('assets/css/meanmenu.css'));
    wp_enqueue_style('owl-carousel-css', get_theme_file_uri('assets/css/owl.carousel.min.css'));
    wp_enqueue_style('naajihun-css', get_theme_file_uri('assets/css/main.css'));
    wp_enqueue_style('naajihun-responsive-css', get_theme_file_uri('assets/css/responsive.css'));
    wp_enqueue_style('naajihun-main-css', get_stylesheet_uri());

    //js file

    wp_enqueue_script('bootstrap-js', get_theme_file_uri('assets/js/bootstrap.bundle.min.js'), '', '6.0', true);
    wp_enqueue_script('isotope-js', get_theme_file_uri('assets/js/isotope.pkgd.min.js'), ['jquery'], '1.0', true);
    wp_enqueue_script('magnific-popup-js', get_theme_file_uri('assets/js/jquery.magnific-popup.min.js'), ['jquery'], '1.0', true);
    wp_enqueue_script('meanmenu-js', get_theme_file_uri('assets/js/jquery.meanmenu.min.js'), ['jquery'], '1.0', true);
    wp_enqueue_script('owlcarousel-js', get_theme_file_uri('assets/js/owl.carousel.min.js'), ['jquery'], '1.0', true);
    wp_enqueue_script('naajihun-script-js', get_theme_file_uri('assets/js/scripts.js'), ['jquery'], '1.0', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'naajihun_theme_scripts');