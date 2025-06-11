<?php

function custom_excerpt($excerpt) {  
    return wp_trim_words($excerpt, 20, '...');  
}  

add_filter('the_excerpt', 'custom_excerpt');  

add_action( 'after_setup_theme', 'testWP_setup' );
function testWP_setup() {
    // Поддержка миниатюр
    add_theme_support( 'post-thumbnails' );
}

function testWP_enqueue_module_script() {
    wp_enqueue_script(
        'main-script', // Уникальный идентификатор
        get_template_directory_uri() . '/assets/js/app.js', // Путь к файлу
        array(), // Зависимости (оставьте пустым)
        '1.0.0', // Версия
        true // Загружать в футере
    );

    // Добавляем `type="module"` к скрипту
    add_filter('script_loader_tag', function($tag, $handle) {
        if ('main-script' === $handle) {
            return str_replace('<script ', '<script type="module" ', $tag);
        }
        return $tag;
    }, 10, 2);
}
add_action('wp_enqueue_scripts', 'testWP_enqueue_module_script');

function testWP_enqueue_styles() {
    // Определяем путь к директории темы
    $theme_dir = get_template_directory_uri();


    // Подключаем основной файл стилей темы в конце, чтобы он загружался последним
    wp_enqueue_style(
        'skidles-main-style', 
        get_stylesheet_uri(), 
        [], 
        '2.0'
    );
}

add_action('wp_enqueue_scripts', 'testWP_enqueue_styles');


// Чтобы контролировать количество записей на странице для пагинации, используйте параметр posts_per_page в запросе. Для главной страницы блога это можно сделать так:

function custom_posts_per_page( $query ) {
    if ( $query->is_main_query() && !is_admin() ) {
        if ( $query->is_home() ) {
            $query->set( 'posts_per_page', 6 );
        }
    }
}
add_action( 'pre_get_posts', 'custom_posts_per_page' );

function register_custom_menus() {
  register_nav_menus([
    'header_menu_1' => 'Верхнее меню 1 (Шапка)',
    'header_menu_2' => 'Верхнее меню 2 (Шапка)',
    'footer_menu_1' => 'Нижнее меню 1 (Подвал)',
    'footer_menu_2' => 'Нижнее меню 2 (Подвал)',
  ]);
}
add_action('init', 'register_custom_menus');

/**
 * Функция для вывода хлебных крошек
 */
function custom_breadcrumbs() {
    // Проверка, что мы не на главной странице
    if (is_front_page()) return;
    
    echo '<section class="breadcrumbs">';
    echo '<div class="container">';
    echo '<div class="breadcrumbs_inner">';
    
    // Главная страница
    echo '<p class="beforePage"><a href="' . esc_url(home_url('/')) . '">Главная</a></p>';
    echo '<p class="beforePage">></p>';

    // Страницы/записи
    if (is_single() || is_page()) {
        // Родительские страницы (если есть)
        if ($post->post_parent) {
            $parents = array_reverse(get_post_ancestors($post->ID));
            foreach ($parents as $parent) {
                echo '<p class="beforePage"><a href="' . esc_url(get_permalink($parent)) . '">' . esc_html(get_the_title($parent)) . '</a></p>';
                echo '<p class="beforePage">></p>';
            }
        }
        // Текущая страница
        echo '<p class="thisPage">' . esc_html(get_the_title()) . '</p>';
    } 
    // Категории
    elseif (is_category()) {
        $cat = get_queried_object();
        echo '<p class="thisPage">' . esc_html($cat->name) . '</p>';
    }
    // Метки
    elseif (is_tag()) {
        echo '<p class="thisPage">Метка: ' . single_tag_title('', false) . '</p>';
    }
    // Поиск
    elseif (is_search()) {
        echo '<p class="thisPage">Результаты поиска: "' . get_search_query() . '"</p>';
    }
    // 404
    elseif (is_404()) {
        echo '<p class="thisPage">Страница не найдена</p>';
    }
    // Архивы дат
    elseif (is_date()) {
        echo '<p class="thisPage">';
        if (is_day()) {
            echo get_the_date();
        } elseif (is_month()) {
            echo get_the_date('F Y');
        } elseif (is_year()) {
            echo get_the_date('Y');
        }
        echo '</p>';
    }

    echo '</div>';
    echo '</div>';
    echo '</section>';
}
