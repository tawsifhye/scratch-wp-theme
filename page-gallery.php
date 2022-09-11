<?php

get_header();

if(have_posts()){
    while(have_posts()){
        the_post(); ?>
<article class="page">
    <div class="custom-page-layout">
        <div class="page-title">
        <h2><?php the_title();?></h2>
        </div>
        <div class="page-content">
        <?php the_content(); ?>
        </div>
    </div>
    
  
</article>

   <?php }
}

else{
  echo  '<h1>Hello World</h1>';
}

get_footer();

?>