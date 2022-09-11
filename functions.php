<?php
function learningWordPress_resources(){
    wp_enqueue_Style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');

?>