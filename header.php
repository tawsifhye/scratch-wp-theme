<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset="<?php bloginfo('charset');?>" >
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name');?></title>

        <?php wp_head();?>
    </head>

    <body <?php body_class();?>>
    <!-- site header  -->
    <!-- container -->
    <div class="custom-container">
    <header class="site-header">
        <h1><a href="<?php echo home_url();?>"><?php bloginfo('name');?></a></h1>
        <h5>
            <?php bloginfo('description'); ?>
            <?php if(is_page(2)) { ?>
        -Thank you for visiting our website
        <?php } ?>
    </h5>
    
        
        
        <nav class="site-nav">
        <?php
        $args = array(
            'theme_location'=> 'primary'
        );
        ?>
         <?php wp_nav_menu($args);?>
    </nav>
    </header>

    <!-- /site header  -->