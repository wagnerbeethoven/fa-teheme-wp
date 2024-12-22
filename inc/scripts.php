<?php
function carregar_estilos_e_scripts() {
    // Estilos do tema
    wp_enqueue_style('estilo-tema', get_stylesheet_uri());
    wp_enqueue_style('main-css', get_template_directory_uri() . '/main.css', array(), '1.0');

    // Scripts do tema
    wp_enqueue_script('jquery'); // Biblioteca jQuery
    wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'carregar_estilos_e_scripts');
