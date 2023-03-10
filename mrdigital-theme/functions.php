<?php

function loadScripts()
{
  wp_enqueue_script('jquery');
  wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css");
  wp_enqueue_style("mainStyle", get_theme_file_uri() . "/css/main.css");
  wp_enqueue_script("bootstrapJS", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js", 'jquery', false, true);
}

add_action('wp_enqueue_scripts', 'loadScripts');

// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


// Menus
register_nav_menus(
  array(
    'top-menu' => 'Top Menu Location',
    'footer-menu' => 'Footer Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
  )
);

// Custom image sizes
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);

// Register sidebars

function my_sidebars()
{
  register_sidebar(
    array(
      'name' => 'Page Side Bar',
      'id' => 'page-side-bar',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name' => 'Blog Side Bar',
      'id' => 'blog-side-bar',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );
}

add_action('widgets_init', 'my_sidebars');


function my_first_post_type()
{
  $args = array(
    'labels' => array(
      'name' => 'Cars',
      'singular_name' => 'Car',
    ),
    'hierarchical' => true,
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-car',

    'support' => array('title', 'editor', 'thumbnail'),
    // 'rewrite' => array('slug' => 'cars'),

  );
  register_post_type('cars', $args);
}

add_action('init', 'my_first_post_type');

function my_first_taxonomy()
{
  $args = array(
    'labels' => array(
      'name' => 'Brands',
      'singular_name' => 'Brand',
    ),
    'public' => true,
    'hierarchical' => false,
    'support' => array('title', 'editor', 'thumbnail'),
  );

  register_taxonomy('brands',  array('cars'), $args);
}

add_action('init', 'my_first_taxonomy');
