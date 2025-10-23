<?php
// Exit if accessed directly
defined('ABSPATH') || exit;

/**
 * Theme Constants
 */
define('THEMEROOT', get_stylesheet_directory_uri());
define('IMG', THEMEROOT . '/dist/img');
define('ICON', THEMEROOT . '/dist/icons');
define('JS', THEMEROOT . '/dist/js');
define('CSS', THEMEROOT . '/dist/css');

/**
 * Theme Supports
 */
add_theme_support('post-thumbnails');

/**
 * Register Menus
 */
function mytheme_setup()
{
    // Register navigation menu
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'mytheme'),
        'footer-menu' => __('Footer Menu', 'nh'),
    ));
}
add_action('after_setup_theme', 'mytheme_setup');


// Custom Walker Class for Navbar
class My_Nav_Walker extends Walker_Nav_Menu
{
    // Start level (submenu ul)
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"submenu-list\">\n";
    }

    // Start element (li)
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $class_names = '';

        $output .= $indent . '<li>';

        $attributes  = !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        $title       = apply_filters('the_title', $item->title, $item->ID);

        $output .= '<a' . $attributes . '>' . $title . '</a>';
    }

    // End element
    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>\n";
    }
}


// footer register
// Register Menus
function yourthemename_register_menus()
{
    register_nav_menus(array(
        'footer_company'   => __('Footer Company Menu', 'yourthemename'),
        'footer_service'   => __('Footer Service Menu', 'yourthemename'),
        'footer_resources' => __('Footer Resources Menu', 'yourthemename'),
    ));
}
add_action('init', 'yourthemename_register_menus');

// Add Theme Customizer settings for social links
function yourthemename_customize_register($wp_customize)
{

    // Twitter
    $wp_customize->add_setting('twitter_link', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('twitter_link', array(
        'label' => __('Twitter Link', 'yourthemename'),
        'section' => 'title_tagline',
        'type' => 'url',
    ));

    // Facebook
    $wp_customize->add_setting('facebook_link', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('facebook_link', array(
        'label' => __('Facebook Link', 'yourthemename'),
        'section' => 'title_tagline',
        'type' => 'url',
    ));

    // Github
    $wp_customize->add_setting('github_link', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('github_link', array(
        'label' => __('Github Link', 'yourthemename'),
        'section' => 'title_tagline',
        'type' => 'url',
    ));

    // LinkedIn
    $wp_customize->add_setting('linkedin_link', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('linkedin_link', array(
        'label' => __('LinkedIn Link', 'yourthemename'),
        'section' => 'title_tagline',
        'type' => 'url',
    ));
}
add_action('customize_register', 'yourthemename_customize_register');




/**
 * Carbon Fields Setup
 */
add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once get_template_directory() . '/vendor/autoload.php';
    \Carbon_Fields\Carbon_Fields::boot();

    // Include Gutenberg blocks
    require_once get_template_directory() . '/inc/gutenberg.php';
}

/**
 * Allow SVG Upload
 */
function allow_svg_upload($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');

/**
 * Redirect 404 to homepage
 */
function custom_redirect_to_homepage()
{
    if (is_404()) {
        wp_redirect(home_url());
        exit();
    }
}
add_action('template_redirect', 'custom_redirect_to_homepage');

/**
 * Disable auto-updates
 */
add_filter('auto_update_plugin', '__return_false');
add_filter('auto_update_theme', '__return_false');

/**
 * Disable Contact Form 7 auto <p>
 */
add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * Enqueue Theme Assets (CSS + JS)
 */
function my_theme_scripts()
{

    // WordPress default style.css
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // Webpack compiled CSS
    wp_enqueue_style('app-style', get_template_directory_uri() . '/dist/app.css', array(), '1.0');

    // Webpack compiled JS (includes Swiper + custom init)
    wp_enqueue_script('app-js', get_template_directory_uri() . '/dist/app.js', array(), '1.0', true);

    // Swiper CSS & JS from CDN (optional if not bundled in app.js)
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');

/**
 * Admin Styles for Carbon Fields blocks
 */
add_action('admin_head', function () {
    echo "<style>
       .cf-block__fields { padding: 30px; }
       .block-editor-block-list__block:nth-child(even){ background-color: #eff4fc; }
       .block-editor-block-list__block:nth-child(odd){ background-color: rgba(16, 49, 107, 0.01); }
       .block-editor .cf-separator h3{ text-align: center; }
    </style>";
});




// Remove auto <p> and <br> tags from Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');
