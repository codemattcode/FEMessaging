<!-- Header including Meta Info -->
<?php  
  
get_header();
// Loop and display content
  if (have_posts()) :
    while (have_posts()) : the_post(); 
// Page Content
  the_content();
?>


<section class="portfolio-section">
<div class="wrapper">
<div class="row">
<div class="col-12">
<h2 class="portfolio">Portfolio</h2>
</div>
</div><!-- /row -->

<div class="row">
  <div class="col-6"><p><a href="https://www.linkedin.com/pulse/how-combining-iots-smart-gadgets-machine-learning-could-rina-pathare?trk=prof-post">As published in Huffington Post - thought leadership article on Machine Learning, Big Data and IOT transforming health.</a></p>

  <p class="portfolio-cta-button"><a class="contact__cta cta-pink" href="https://www.linkedin.com/pulse/how-combining-iots-smart-gadgets-machine-learning-could-rina-pathare?trk=prof-post">Click here</a></p>
  </div>

  <div class="col-6"><p><a href="http://fesolutions.me/longform.pdf">Long form content on millennial branding advise for baby products</a></p>
  
  <p class="portfolio-cta-button"><a class="contact__cta cta-pink" href="http://fesolutions.me/longform.pdf">Click here</a></p>
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
