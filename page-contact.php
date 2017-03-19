<!-- Header including Meta Info -->
<?php  
  
get_header();
// Loop and display content
  if (have_posts()) :
    while (have_posts()) : the_post(); 
?>


<section class="contact-section">
<div class="wrapper">
<div class="row">
<div class="col-12">
<h2 class="contact">contact</h2>
</div>
</div><!-- /row -->

<div class="row">
  <div class="col-12">

    <?php the_content(); ?>      

  </div>
</div><!-- /row -->  

</div><!-- /wrapper -->
</section>









<!-- Error if page not found -->
<?php   
  endwhile;

  else : 
    echo '<p>Oops! 404 : Page Not Found</p>';

  endif; 
?>


<!--  Footer content -->
<?php get_footer(); ?>



<!-- ******************************************* -->
<!-- *** Design and Code by codeMattCode.com *** -->
<!-- ******************************************* -->
