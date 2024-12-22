<?php
function customizar_rodape($wp_customize)
{
  // Seção para o rodapé
  $wp_customize->add_section('rodape', array(
    'title' => __('Rodapé', 'meutema'),
    'description' => __('Configurações do rodapé do site', 'meutema'),
  ));

  // Configuração e controle para a descrição do rodapé
  $wp_customize->add_setting('footer_description', array(
    'default' => 'Descrição padrão do rodapé.',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('footer_description', array(
    'label' => __('Descrição do Rodapé', 'meutema'),
    'section' => 'rodape',
    'type' => 'text',
  ));

  // Configuração e controle para texto alternativo da logo
  $wp_customize->add_setting('logo_alt', array(
    'default' => 'Texto alternativo padrão da logo.',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('logo_alt', array(
    'label' => __('Texto Alternativo da Logo', 'meutema'),
    'section' => 'rodape',
    'type' => 'text',
  ));
}
add_action('customize_register', 'customizar_rodape');
