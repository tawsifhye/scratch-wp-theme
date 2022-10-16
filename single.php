<?php

get_header();

if(have_posts()){
    while(have_posts()){
        the_post(); ?>
<article class="post">
    <?php the_post_thumbnail('banner-image');?>
    <h2><a href="<?php the_permalink();?>"> <?php the_title();?></a></h2>
    <p><a href=<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>><?php echo the_author(); ?></a></p>
    <p><?php echo the_time('F-j Y g:i a'); ?></p>
    <?php the_content(); ?>
</article>

<?php }
}

else{
  echo  '<h1>No Content</h1>';
}

get_footer();

?>