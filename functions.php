<?php
 
 function enqueue_customtheme_styles() {	
    wp_enqueue_style("style", get_stylesheet_uri() );
    wp_enqueue_style("mywork", get_template_directory_uri() . '/css/mywork.css');
    wp_enqueue_style("blog", get_template_directory_uri() . '/css/blog.css');
    wp_enqueue_style("contact", get_template_directory_uri() . '/css/contact.css');
    //wp_enqueue_script( 'index', get_template_directory_uri() . '/scripts/index.js', array ( 'jquery' ),  NULL, false);
    wp_enqueue_script( 'ColorChanger', get_template_directory_uri() . '/scripts/ColorChanger.js', array ( 'jquery' ),  NULL, false);
    //wp_enqueue_script( 'DetectVideo', get_template_directory_uri() . '/scripts/DetectVideo.js', array ( 'jquery' ),  NULL, false);
}
add_action("wp_enqueue_scripts", "enqueue_customtheme_styles");

add_filter('use_block_editor_for_post', '__return_false', 10);

remove_action( 'wp_head', 'wp_resource_hints', 2 );






?>