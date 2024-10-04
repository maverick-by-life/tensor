<?php

function tensor_enqueue_scripts()
{

    wp_enqueue_style("tensor-swiper-style", get_template_directory_uri() . "/assets/css/swiper-bundle.min.css");
    wp_enqueue_style("tensor-style", get_template_directory_uri() . "/assets/css/style.css", [], "1.0", "all");

    wp_enqueue_script("tensor-swiper-script", get_template_directory_uri() . "/assets/js/swiper-bundle.min.js", [], "", true);
    wp_enqueue_script("tensor-script", get_template_directory_uri() . "/assets/js/main.js", ['jquery'], "1.0", true);
};

add_action("wp_enqueue_scripts", "tensor_enqueue_scripts");

function tensor_theme_init()
{
    register_nav_menus([
        'main-menu-left' => 'Левое меню',
        'main-menu-right' => 'Правое меню',
        'footer-nav' => 'Футер навигация',
        'footer-catalog' => 'Футер каталог'
    ]);

    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', ['video', 'image',]);
};
add_action('after_setup_theme', 'tensor_theme_init', 0);

function tensor_register_post_type()
{
    $args = array(
        'label' => esc_html__('Отзывы',),
        'labels' => array(
            'name' => 'Отзывы',
            'singular_name' => 'Отзыв',
            'add_new' => 'Добавить отзыв',
            'menu_name' => 'Отзывы'
        ),
        'supports' => ['title', 'editor', 'thumbnail'],
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'review'],
        'show_in_rest' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-megaphone',
    );
    register_post_type('reviews', $args);
};
add_action('init', 'tensor_register_post_type');
