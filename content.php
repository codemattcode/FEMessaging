<!-- BLOG PAGE INDEX / POSTS LIST TEMPLATE -->

<article class="blog-txt">
<div class="wrapper">
<div class="row">

<div class="col-12">
<div class="blog-push-down-comp">
<!-- add post title link / title -->
      <a style="font-weight: bold;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</div>
<div>
<!-- add feature image thumbnail -->
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
     
</div>

<div>    
<!-- add post excerpt/content -->
    <?php echo get_the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>">Read More &raquo;</a>
</div>    
    
</div><!-- /col-12 -->

</div><!-- /row -->
</div><!-- /wrapper -->
</article>

