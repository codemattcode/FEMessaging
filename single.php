<!-- INDIVIDUAL BLOG POSTS TEMPLATE -->
<?php    
get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); 
?>

<div class="wrapper">
<div class="row">
<div class="col-12">
<div class="blog-push-down-comp">

<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

<!-- add feature image banner -->
<?php the_post_thumbnail('banner-image'); ?>

<?php the_content(); ?>

</div>
</div><!-- col-12 -->
</div><!-- /row -->
</div><!-- /wrapper -->










<?php   
  endwhile;

  else : 
    echo '<p>Oops! 404 : Page Not Found</p>';

  endif;


get_footer();

?>


