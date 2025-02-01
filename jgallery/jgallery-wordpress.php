<?php
/*
Plugin Name: jGallery for WordPress
Plugin URI: https://github.com/leandrolopes13/jgallery
Description: Integrates jGallery into WordPress.
Version: 1.0
Author: Leandro Lopes
Author URI: https://github.com/leandrolopes13/
License: GPL2
*/

function jgallery_enqueue_scripts() {
    // Carrega o jQuery (geralmente já está incluído no WordPress)
    wp_enqueue_script('jquery');

    // Carrega o jGallery
    wp_enqueue_script(
        'jgallery',
        plugins_url('jgallery.min.js', __FILE__),
        array('jquery'),
        '1.0',
        [
            // 'strategy' => 'async',
            'in_footer' => true
        ]
    );

    wp_enqueue_script(
        'jgallery-init',
        plugins_url('jgallery.init.js', __FILE__),
        array('jquery'),
        '1.0',
        [
            // 'strategy' => 'async',
            'in_footer' => true
        ]
    );

    // Carrega o CSS do jGallery
    wp_enqueue_style(
        'jgallery-style-init',
        plugins_url('jgallery.init.css', __FILE__),
        array(),
        '1.0'
    );
    wp_enqueue_style(
        'jgallery-style',
        plugins_url('jgallery.min.css', __FILE__),
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'jgallery_enqueue_scripts');

function jgallery_shortcode($atts) {
    // Atributos padrão
    $atts = shortcode_atts(array(
        'images' => '', // Lista de URLs das imagens separadas por vírgula
    ), $atts, 'jgallery');

    // Divide a lista de imagens em um array
    $images = explode(',', $atts['images']);

    // Gera o HTML para o jGallery
    $output = '<div id="jgallery">';
    foreach ($images as $image) {
        $output .= '<a href="'.site_url(trim($image)).'" class="jgallery-item" data-type="image"><img src="' . site_url(trim($image)) . '" alt=""></a>';
    }
    $output .= '</div>';

    // Inicializa o jGallery
    // $output .= '<script type="text/javascript">
    //     jQuery(document).ready(function($) {
    //         $(".jgallery-item").jgallery();
    //     });
    // </script>';

    return $output;
}
add_shortcode('jgallery', 'jgallery_shortcode');

function hide_admin_bar(){
    return false;
}
add_filter( 'show_admin_bar' , 'hide_admin_bar' );