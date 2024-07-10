<?php 
function beta_theme_files() {
    wp_enqueue_script('main-beta-theme-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('main_beta_theme_styles', get_theme_file_uri('/build/index.css'));
}
add_action('wp_enqueue_scripts', 'beta_theme_files' );

function beta_theme_post_types() {
    register_post_type( 'event', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'add_new' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar',
    ) );
}
add_action('init', 'beta_theme_post_types');


$_include = array(
    '/card.php'
);

foreach( $_include as $component ) {
    require_once get_theme_file_path( '/lib/components' . $component );
}

?>