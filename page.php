<!-- Header including Meta Info -->
<?php  
  
get_header();
// Loop and display content
  if (have_posts()) :
    while (have_posts()) : the_post(); 
// Page Content
  the_content();
?>

    
<div class="theme-tips"><p>This is a generic page (page.php)</p></div>


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
