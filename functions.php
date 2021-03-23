<?php


function endeavor_theme_support(){
  // Evitar tener que poner el titulo en todas las paginas
  add_theme_support('title-tag');
  // Habilitar thumbnails de los posts.
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','endeavor_theme_support');


// Habilitar seccion menus en el backend
function endeavor_menus(){

  $locations = array(
    'primary' => "Menu principal left side",
    'footer' => "Menu del footer"
  );

  register_nav_menus($locations);
}

add_action('init','endeavor_menus');


// (css) Enlazar bootstrap y fontawesome
function endeavor_styles(){

  $version = wp_get_theme()->get( 'Version');
  wp_enqueue_style('endeavor-style', get_template_directory_uri() . "/style.css", array('endeavor-bootstrap'), $version, 'all');
  wp_enqueue_style('endeavor-bootstrap', get_template_directory_uri() . "/css/bootstrap.min.css", array(), '4.6.0', 'all');
  wp_enqueue_style('endeavor-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13', 'all');

}

add_action( 'wp_enqueue_scripts', 'endeavor_styles');

// (js) Enlazar bootstrap y fontawesome
function endeavor_scripts(){

  wp_enqueue_script('endeavor-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
  wp_enqueue_script('endeavor-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '3.4.1', true);
  wp_enqueue_script('endeavor-bootstrap', get_template_directory_uri() . "/js/bootstrap.min.js", array(), '3.4.1', true);
  wp_enqueue_script('endeavor-main', get_template_directory_uri() . "/js/main.js", array(), '3.4.1', true);

}

add_action( 'wp_enqueue_scripts', 'endeavor_scripts');



// Habilitar sidebar dynamics.
function endeavor_widget_areas(){
  register_sidebar(
    array(
      'before_title' => '',
      'after_title' => '',
      'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
      'after_widget' => '</ul>',
      'name' => 'Sidebar Area',
      'id' => 'sidebar-endeavor',
      'description' => 'Area Sidebar endeavor'
    )
  );

  register_sidebar(
    array(
      'before_title' => '',
      'after_title' => '',
      'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
      'after_widget' => '</ul>',
      'name' => 'Footer Area',
      'id' => 'footer-endeavor',
      'description' => 'Area Footer endeavor'
    )
  );



}



add_action( 'widgets_init', 'endeavor_widget_areas');


 ?>
