<?php

get_header();

if(have_posts()){
    while(have_posts()){
        the_post(); ?>
<article class="post">
    <h2><a href="<?php the_permalink();?>"> <?php the_title();?></a></h2>
       <?php the_content(); ?>
</article>

   <?php }
}

else{
  echo  '<h1>Hello World</h1>';
}

get_footer();

?>