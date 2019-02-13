<?php

add_image_size('logo', 200, 9999);
add_image_size('about_bg', 360, 478);
add_image_size('footer_logo', 80, 63);

add_theme_support('post-thumbnails');

add_action('wp_enqueue_scripts', 'enqueue_scripts');
function enqueue_scripts()
{

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('et-line-font', get_template_directory_uri() . '/css/et-line-font/et-line-font.css');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup/magnific-popup.css');
    wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/css/owl-carousel/owl.carousel.min.css');
    wp_enqueue_style('owl.theme.default', get_template_directory_uri() . '/css/owl-carousel/owl.theme.default.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('g-red', get_template_directory_uri() . '/css/colors/g-red.css');


    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('jquery.magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js');
    wp_enqueue_script('jquery.countTo', get_template_directory_uri() . '/js/jquery.countTo.js');
    wp_enqueue_script('carousel', get_template_directory_uri() . '/js/owl.carousel.min.js');
    wp_enqueue_script('isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js');
    wp_enqueue_script('masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js');
    wp_enqueue_script('parsley', get_template_directory_uri() . '/js/parsley.js');
    wp_enqueue_script('scrollIt', get_template_directory_uri() . '/js/scrollIt.min.js');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');

}


add_action( 'init', 'portfolio_post_type' );

function portfolio_post_type() {
    $labels = array('name' => 'Портфолио' );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_position' => 20, // порядок в меню
        'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail')
    );
    register_post_type('portfolio', $args);

    register_taxonomy('portfolio_category', array('portfolio'), array(
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => array(
            'name'              => 'Категория портфолио',

        ),
        'public'                => true,
        'hierarchical'          => false,
        'rewrite'               => true,
        '_builtin'              => false,
        'show_in_quick_edit'    => null, // по умолчанию значение show_ui
    ) );

}
