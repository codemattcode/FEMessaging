<!-- BLOG PAGE INDEX / POSTS LIST TEMPLATE -->

<article class="blog-txt">
<div class="wrapper">
<div class="row">

<div class="col-12">
<div class="blog-push-down-comp">
<!-- uncomment to add post title link / title -->
      <!-- <a href="<?php the_permalink(); ?>"> -->
      
      <span style="font-weight: bold;"><?php the_title(); ?></span>
      
      <!-- </a> -->
</div>
<div>
<!-- add feature image thumbnail -->
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
     
</div>

<div>    
<!-- add post excerpt/content -->
    <?php echo get_the_content(); ?>
      <!-- uncomment to add link to single.php/blog post -->
      <!-- <a href="<?php the_permalink(); ?>">Read More &raquo;</a> -->
</div>    
    
</div><!-- /col-12 -->

</div><!-- /row -->
</div><!-- /wrapper -->
</article>

