<?php
//chargement des fichiers
function fileLoading()
{
    wp_enqueue_style('style-css', get_stylesheet_uri());
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js');
}

add_action('wp_enqueue_scripts', 'fileLoading');

//Ajout logo
function addLogo()
{
    add_theme_support('custom-logo');
}

add_action('init', 'addLogo');

//Ajout menu
function addMenu()
{
    register_nav_menu('menu-principal', 'Menu principal');
    register_nav_menu('menu-footer', 'Menu footer');
}

add_action('init', 'addMenu');

//Ajout support image a la une
add_theme_support('post-thumbnails');
