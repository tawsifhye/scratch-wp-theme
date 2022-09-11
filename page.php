<?php

get_header();

if(have_posts()){
    while(have_posts()){
        the_post(); ?>
<article class="page">
    <h2><?php the_title();?></h2>
    <?php the_content(); ?>
</article>

   <?php }
}

else{
  echo  '<h1>Hello World</h1>';
}

get_footer();

?>