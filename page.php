<?php

get_header();

if(have_posts()){
    while(have_posts()){
        the_post(); ?>
<article class="page">
  
  <?php if(has_children() OR $post->post_parent > 0) { ?>
    <span class="parent-link"><a href=<?php echo get_the_permalink(get_top_ancestor_id())?>><?php echo get_the_title(get_top_ancestor_id()) ?></a></span>
<?php 
  $args = array (
    'child_of'=>get_top_ancestor_id(),
    'title_li'=> ''
  );

  ?>
  <?php wp_list_pages($args)?>
   <?php } ?> 


  
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