<!-- THIS FILE APPLIES WHEN YOU CREATE A PAGE CALLED 'SERVICES' IN THE WORDPRESS DASHBOARD. USE THIS PATTERN TO CREATE AND BUILD ADDITIONAL UNQIUE PAGES-->

<!-- Header including Meta Info -->
<?php  
  
get_header();
// Loop and display content
  if (have_posts()) :
    while (have_posts()) : the_post(); 
// Page Content
  the_content();
?>
<!-- helper content -->
<!-- <div class="theme-tips"><p>This is a 'Unique' Page : Services (page-services.php) </p></div> -->



<!-- live content -->
<!-- *************************************************************************************************************************************************************** -->


<section>
<div class="wrapper">
<div class="row">
<div class="col-12">
<h2 class="services">Services</h2>
</div>
</div><!-- /row -->

<div class="row">
<div class="col-4">
<h3 class="services-titles">Messaging Playbook </h3>
<p>Create a solid foundation for your marketing and sales, so you can focus on your core business, passion, excellence, and profitability. Good for beginners to advance marketers, a playbook lays it all out for you in a one master messaging document. It includes a customer analysis, core brand identity and sales tactics.
</p></div>

<div class="col-4">
<h3 class="services-titles">Monthly Article<br>Blogging Packages</h3> 
<p>Nurture the prospects who would otherwise slip away with consistent articles on your business blog, LinkedIn Pulse, Medium, industry publications, guest blogs on other sites, and more. Without having to write anything yourself.</p>
</div>

<div class="col-4">
<h3 class="services-titles">Email Newsletters</h3>
<p>Connect with your customers and prospects through email. It’s still one of the best ways to stay in touch and helps you build rapport with your list and close more sales. Increase your MRR and reduce monthly churn with a regular email newsletter for your tech business.</p>
</div>

</div><!-- /row -->
</div><!-- /wrapper -->
</section>







<!-- /live content -->
<!-- *************************************************************************************************************************************************************** -->






<!-- Error if page not found -->
<?php   
  endwhile;

  else : 
    echo '<p>Oops! 404 : Page Not Found</p>';

  endif; 
?>


<!--  Footer content -->
<?php get_footer(); ?>



