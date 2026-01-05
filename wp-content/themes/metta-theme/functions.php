<?php
/**
 * Metta Theme functions and definitions
 */

function metta_theme_scripts() {
    // Enqueue main theme stylesheet
    wp_enqueue_style( 'metta-theme-style', get_stylesheet_uri() );

    // Enqueue Flatsome styles
    wp_enqueue_style( 'flatsome-main', get_site_url() . '/wp-content/themes/flatsome/assets/css/flatsome.css', array(), '3.20.0' );
    wp_enqueue_style( 'flatsome-home', get_site_url() . '/wp-content/themes/flatsome/assets/css/home.css', array('flatsome-main'), '3.20.0' );
    wp_enqueue_style( 'flatsome-child-style', get_site_url() . '/wp-content/themes/flatsome-child/style.css', array('flatsome-main'), '3.0' );
    
    // Enqueue jQuery
    wp_enqueue_script('jquery');
    
    // Enqueue Flatsome dependencies
    wp_enqueue_script( 'swiper-js', get_site_url() . '/wp-content/themes/flatsome-child/assets/js/swiper-bundle.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'fancybox-js', get_site_url() . '/wp-content/themes/flatsome-child/assets/js/fancybox.umd.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'flatsome-live-search', get_site_url() . '/wp-content/themes/flatsome/assets/js/extensions/flatsome-live-search.js', array('jquery'), '3.20.0', true );
    wp_enqueue_script( 'flatsome-masonry', get_site_url() . '/wp-content/themes/flatsome/assets/libs/packery.pkgd.min.js', array('jquery'), '3.20.0', true );

    // Enqueue Flatsome main script
    wp_enqueue_script( 'flatsome-js', get_site_url() . '/wp-content/themes/flatsome/assets/js/flatsome.js', array('jquery'), '3.20.0', true );

    // Localize Flatsome variables
    wp_localize_script( 'flatsome-js', 'flatsomeVars', array(
        'theme' => array( 'version' => '3.20.0' ),
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'rtl' => '',
        'sticky_height' => '70',
        'assets_url' => get_site_url() . '/wp-content/themes/flatsome/assets/',
        'lightbox' => array(
            'close_markup' => '<button title="%title%" type="button" class="mfp-close"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>',
            'close_btn_inside' => false,
        ),
        'user' => array( 'can_edit_pages' => false ),
        'i18n' => array(
            'mainMenu' => 'Menu chính',
            'toggleButton' => 'Chuyển đổi',
        ),
        'options' => array(
            'cookie_notice_version' => '1',
            'swatches_layout' => false,
            'swatches_disable_deselect' => false,
            'swatches_box_select_event' => false,
            'swatches_box_behavior_selected' => false,
            'swatches_box_update_urls' => '1',
            'swatches_box_reset' => false,
            'swatches_box_reset_limited' => false,
            'swatches_box_reset_extent' => false,
            'swatches_box_reset_time' => 300,
            'search_result_latency' => '0',
            'header_nav_vertical_fly_out_frontpage' => 1,
        ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'metta_theme_scripts' );

function metta_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'metta-theme' ),
        'footer'  => __( 'Footer Menu', 'metta-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'metta_theme_setup' );
