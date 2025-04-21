<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
    wp_enqueue_script('custom_javascript', get_stylesheet_directory_uri() . '/customElements.js');
    wp_enqueue_script('custom_module1', 'https://kunal1118.github.io/Assignment-1/index.js', array(), null, true);
    wp_script_add_data('custom_module1', 'type', 'module'); 
    wp_enqueue_script('custom_module2', 'https://rhildred.github.io/chatter/fab.js', array(), null, true);
    wp_script_add_data('custom_module2', 'type', 'module');
}
//
// Your code goes below
//