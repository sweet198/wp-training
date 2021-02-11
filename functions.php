<?php
    add_action('wp_enqueue_scripts', 'childhood_styles'); // подключаем стили
    add_action('wp_enqueue_scripts', 'childhood_scripts'); // подключаем скрипты

    function childhood_styles() {
        wp_enqueue_style('childhood-style', get_stylesheet_uri()); // подключение главного стилевого файла
        wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/styles/main.min.css'); // подключение дополнительных стилей
        wp_enqueue_style('animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css'); // подключение внешних стилей

    };

    function childhood_scripts() {
        wp_enqueue_script('childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true ); // подключение скриптов, array('jquery') - загрузится только после загрузки jquery, true - в футере
    };

    add_theme_support( 'custom-logo' ); // подключение возможности добавлять лого в админке

    add_theme_support( 'post-thumbnails' ); // добавление настройки фоновое изображение в настройку записи
?>