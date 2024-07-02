<?php 
function beta_theme_files() {
    wp_enqueue_script('main-beta-theme-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('main_beta_theme_styles', get_theme_file_uri('/build/index.css'));
}
add_action('wp_enqueue_scripts', 'beta_theme_files' );
?>