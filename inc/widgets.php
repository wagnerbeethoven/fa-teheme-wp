<?php
function registrar_widgets_tema()
{
  register_sidebar(array(
    'name' => __('Sidebar Principal', 'meutema'),
    'id' => 'sidebar-1',
    'description' => __('Widgets para a barra lateral principal.', 'meutema'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
}
add_action('widgets_init', 'registrar_widgets_tema');
