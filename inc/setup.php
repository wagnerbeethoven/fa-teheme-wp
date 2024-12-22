<?php
function tema_setup()
{
  // Suporte a tradução
  load_theme_textdomain('meutema', get_template_directory() . '/languages');

  // Suporte a título dinâmico
  add_theme_support('title-tag');

  // Suporte a miniaturas de posts
  add_theme_support('post-thumbnails');

  // Suporte a embeds responsivos
  add_theme_support('responsive-embeds');

  // Suporte a feed automático
  add_theme_support('automatic-feed-links');

  // Suporte a HTML5
  add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

  // Registrar menus
  register_nav_menus(array(
    'main-menu' => __('Menu Principal', 'meutema'),
    'footer-menu' => __('Menu do Rodapé', 'meutema'),
  ));


  function blankslate_schema_type()
  {
    $schema = 'https://schema.org/';
    if (is_single()) {
      $type = 'Article';
    } elseif (is_author()) {
      $type = 'ProfilePage';
    } elseif (is_search()) {
      $type = 'SearchResultsPage';
    } else {
      $type = 'WebPage';
    }
    echo 'itemscope itemtype="' . esc_url($schema) . esc_attr($type) . '"';
  }
}
add_action('after_setup_theme', 'tema_setup');
