<?php
wp_enqueue_script(
    'elements', 
    ELEMENTOR_ASSETS_URL. 'js/active.js', 
    [], 
    '1.0', 
    true
);

add_action('wp_enqueue_scripts', 'add_element_scripts');
?>