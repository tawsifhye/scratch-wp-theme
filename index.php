<?php

get_header();

if(have_posts()){
    while(have_posts()){
        the_post(); ?>
<article class="post  <?php if (has_post_thumbnail()){?>
has-thumbnail 
<?php } ?>">



    <div class="post-thumbnail ">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('small-thumbnail');?>
        </a>
    </div>

    <h2><a href="<?php the_permalink();?>"> <?php the_title();?></a></h2>

    <p>
        <a href=<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>>
            <?php echo the_author(); ?>
        </a>
    </p>
    <p><?php echo the_time('F-j Y g:i a'); ?></p>

    <div class="post-content ">

        <?php if($post->post_excerpt){ ?> <p>
            <?php echo get_the_excerpt(); ?>
            <a href=" <?php the_permalink(); ?>">Read More&raquo</a>
        </p>
        <?php }
else{
 the_content();
}?>
    </div>

</article>

<?php }
}

else{
  echo  '<h1>No Post</h1>';
}

get_footer();

?>