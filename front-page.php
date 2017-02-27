<?php  
  
get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); 

  the_content();
?>


    Front-page.php
    <br>
    Right here ya'll!
<?php   
  endwhile;

  else : 
    echo '<p>Page Not Found. Please try again</p>';

  endif; ?>



<?php 

get_footer();

?>



