<?php
function learningWordPress_resources(){
    wp_enqueue_Style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');


//Get top ancestor
function get_top_ancestor_id(){
    global $post;
    // echo'<pre>';
    // print_r($post);
    // echo'</pre>';
    if($post->post_parent){
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
        
    }
 
     return $post->ID;
}


//Does Page have Children

function has_children(){
    global $post;

   $pages = get_pages('child_of='.$post->ID);
   
   return count($pages);
}




//Customize excerpt word count length

function custom_excerpt_length(){
    return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length');


function theme_support_setup(){
    
    //Navigation Menus 
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu'),
    ));


    //featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail',200, 120, true);
    add_image_size('banner-image',920, 300, array('left','center')); 
}

    add_action('after_setup_theme', 'theme_support_setup');

?>