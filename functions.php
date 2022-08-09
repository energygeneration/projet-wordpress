<?php
function add_css()
{
   wp_register_style('first', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false,'1.1','all');
   wp_enqueue_style( 'first');

   wp_register_style('second', get_template_directory_uri() . '/assets/css/style.css', false,'1.1','all');
   wp_enqueue_style( 'second');

   wp_register_style('third', get_template_directory_uri() . '/assets/css/responsive.css', false,'1.1','all');
   wp_enqueue_style( 'third');

   wp_register_style('fourth', get_template_directory_uri() . '/assets/css/jquery.mCustomScrollbar.min.css', false,'1.1','all');
   wp_enqueue_style( 'fourth');

}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
   wp_register_script('js-script', get_template_directory_uri() . '/assets/js/jquery.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script');

   wp_register_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'popper');

   wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'bootstrap');

   wp_register_script('js-script', get_template_directory_uri() . '/assets/js/jquery-3.0.0.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script');

   wp_register_script('js-script', get_template_directory_uri() . '/assets/js/jquery.mCustomScrollbar.concat.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script');

   wp_register_script('custum', get_template_directory_uri() . '/assets/js/custom.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'custum');
}
add_action('wp_enqueue_scripts', 'add_script');

add_theme_support( 'menus' );