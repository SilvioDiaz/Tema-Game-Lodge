<?php
// Permitir Thumbnails
add_theme_support( 'post-thumbnails' );
// Permitir SVG
function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
    }
    add_filter('upload_mimes', 'add_file_types_to_uploads');
// CSS e Javascript
function my_theme_enque_styles(){
    wp_enqueue_style( 'mamies-wafers-bootstrap-min',  get_template_directory_uri() .'/css/owl.carousel.min.css', array(), null, 'all' );
    wp_enqueue_style( 'mamies-wafers-carousel',  get_template_directory_uri() .'/css/owl.theme.default.min.css', array(), null, 'all' );
    wp_enqueue_style( 'style', get_stylesheet_uri(), '', null, 'all' );

    wp_enqueue_script( 'twitch', get_template_directory_uri() . '/js/twitch.js', array ( 'jquery' ), 1.1,false);
    wp_enqueue_script( 'Jquery', get_template_directory_uri() . '/js/jquery-3.5.1.js', array ( 'jquery' ), 1.1,false);
    wp_enqueue_script( 'jquerryMin', get_template_directory_uri() . '/js/jquery.min.js', array ( 'jquery' ), 1.1,true);
    wp_enqueue_script( 'caroulselMini', get_template_directory_uri() . '/js/owl.carousel.min.js', array ( 'jquery' ), 1.1,true);
    wp_enqueue_script( 'slide', get_template_directory_uri() . '/js/slide.js', array ( 'jquery' ), 1.1,true);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enque_styles' );
//CATEGORIZADOR
function categorizador($content){
    $patterns = array();
    $patterns [0] = '/ pc /i';
    $patterns [1] = '/Xbox Series/i';
    $patterns [2] = '/playstation 5/i';
    $patterns [3] = '/nintendo switch/i';
    $patterns [4] = '/xbox one/i';
    $patterns [5] = '/playstation 4/i';
    $patterns [6] = '/game lodge/i';
    $replacement = array();
    $replacement [0] = '<a href= "http://gamelodge.com.br/category/pc/"><b>PC</b></a>';
    $replacement [1] = '<a href= "#"><b>Xbox Series</b></a>';
    $replacement [2] = '<a href= "#"><b>Playstation 5</b></a>';
    $replacement [3] = '<a href= "http://gamelodge.com.br/category/nintendo-switch/"><b>Nintendo Switch</b></a>';
    $replacement [4] = '<a href= "http://gamelodge.com.br/category/xbox-one/"><b>Xbox One</b></a>';
    $replacement [5] = '<a href= "http://gamelodge.com.br/category/playstation-4/"><b>Playstation 4</b></a>';
    $replacement [6] = '<b>Game Lodge</b>';
    return preg_replace($patterns, $replacement, $content);
}

?>
