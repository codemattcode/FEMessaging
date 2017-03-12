<!-- Header including Meta Info -->
<?php  
  
get_header();
// Loop and display content
  if (have_posts()) :
    while (have_posts()) : the_post(); 
// Page Content
  the_content();
?>

<!-- HTML PAGE CONTENT -->
<!-- ************************************************************************************************************************************************************ -->

<section class="shine">
<div class="wrapper">
<div class="row">
<div class="col-12">
<h1 class="about">About</h1>
</div>
</div><!-- /row -->

<div class="row">
  <div class="col-12 center">
<img class="rina-pic" src="../img/legacy/rina.jpg">
  </div>
  <div class="col-12">
<p>Come rain or shine, we all have principles that we steadfastly stick to, don't we?</p>

<p>Well, the code that I hold dear to my heart, underpinning and driving all my ideas, are the below quotes from the world of philosophy, advertising, and technology.</p>
  </div>
</div><!-- /row -->
</div><!-- /wrapper -->
</section>

<section class="story">
<div class="wrapper">
<div class="row">
<div class="col-12 center">
<h2 class="about-title">BACK STORY</h2>
<h3 class="about-quote">"Is life not a thousand times too short for us to bore ourselves"</h3>
<p class="about-quote-name">Frederick Nietze</p>
<img class="about-img" src="img/legacy/spock.jpg">
</div><!-- /col-12 -->
</div><!-- /row -->
</div><!-- /wrapper -->
</section>


<section class="started">
<div class="wrapper">
<div class="row">
<div class="col-6">
<h4 class="about4 started-description">I started FS Messaging because of my experiences as a customer dealing with dull branding and copy that seemed to be written for a Spock-like creature.</h4>
<p>Why, I conjectured would businesses and services sell their products and services in a polar opposite style to what we choose to enjoy in our leisure time? For gravitas? For credibility? But the Economist and Vanity Fair manage to be the voice of authority and simultaneously be page turners.</p>
</div>

<div class="col-6">
<h4 class="about4 started-description">Well, once you've discerned a pattern, it's hard to not see.</h4>
<p>There was a clear pattern why some company's made the short list, regardless how good their product was. So rather than reining in my strong compulsion to critique vendors offering, I decided to cut loose and join the other side. Become  a messaging strategist and copywriter offering solutions for business' who are less interested in fitting in, and more interested in find the best way to grow.</p>
</div>
​</div><!-- /row -->
</div><!-- /wrapper -->
</section>


<section class="approach">
<div class="wrapper">
<div class="row">
<div class="col-12 center">
<h2 class="about-title">APPROACH</h2>
<h3 class="about-quote">"Tell the truth but make it fascinating"</h3>
<p class="about-quote-name">David Oligilvy</p>
<img class="about-img" src="img/legacy/lion-head.jpg">
</div><!-- /col-12 -->
</div><!-- /row -->

<div class="row">
<div class="col-12">
<p>I passionately, fervently, deeply believe, based on experience, that there are three key tasty ingredients that need to be applied to ensure your visitors are literally glued to your business. The ingredients are the three ‘E’ s, which every messaging needs to include.</p>
​
<p class="formula">EDUCATIONAL + EMOTIVE + ENTERTAINING
=
FEROCIOUSLY ENGAGING Messaging</p>
​</div><!-- /col-12 -->
</div><!-- /row -->
</div><!-- /wrapper -->
</section>


<section class="cookie">
<div class="wrapper">
<div class="row">
<div class="col-4">
<h4 class="about4 cookie-description fix-spacing">But this is no standard cookie cutter recipe.</h4>
​<p class="fix-spacing">If you want your messaging to really work it needs to have the right blend that is relevant for your customer’s taste and stage in the sales funnel.</p>
​</div>

<div class="col-4">
<h4 class="about4 cookie-description fix-spacing">To get the right flavour.</h4>
​<p class="fix-spacing">I use my engineering experience to deep dive into your company, product and competitors. Use a journalist's nose to sniff out the right angle to hook your audience in. And then transform myself into an actor so I can get into your customer’s heads and write in their voice.</p>
​</div>

<div class="col-4">
<h4 class="about4 cookie-description fix-spacing">It takes time to bake. Time I have and you don't.</h4>
<p>I put all my skill, passion, know-how, research and diverse experience into everything I do, to make it Ferociously Engaging for you.</p> 
</div>
</div><!-- /row -->
</div><!-- /wrapper -->
</section>

<section class="resume">
<div class="wrapper">
<div class="row">
  <div class="col-12 center">
<h2 class="about-title">RESUME IN DOTS</h2>
<h3 class="about-quote">"You can't connect the dots looking forward; you can only connect them looking backwards"</h3>
<p class="about-quote-name">Steve Jobs</p>
<img class="about-img" src="img/legacy/steve-jobs.jpg">
</div><!-- /col-12 -->
</div><!-- /row -->

<div class="row">
  <div class="col-6">
<h4 class="about4">Resume, in dot form.</h4>
<p>When Steve Jobs made the speech (which the above quote is from) he was referring to when he dropped out of college, taking any class that suited him. One of those classes was calligraphy, which continued to influence him years later when he created the first home computer with font options.</p>
<p>Just like Steve, you’re probably at the stage where you are consolidating all the dots. It's certainly the case for me.</p>
​ </div>

  <div class="col-6">
<h4 class="about4">A work nomad, I have been switching between tech, branding, and sales.</h4>
<p>15 years of delivering branding strategy. Supported by American Writers and Artist Copywriting Courses, a Software Engineering Postgraduate and a Finance and Business BA Hons - coupled with my near-obsessive passion of  films, philosophy, journalism, and  literature  throughout my life, means I have a number of dots to connect.</p>
<p>The type of dots, that once connected can remould and rethink complex services and products - then communicate in a way which is fascinating for both subject matter experts and the layman.</p>
​  </div>
</div><!-- /row -->
</div><!-- /wrapper -->
</section>

<section class="contact">
<div class="wrapper">
<div class="row">
<div class="col-12">

<div class="center">
<p class="fix-spacing">Or get in touch for a free consultation</p> 

​<p class="about-cta-button">
<a class="contact__cta no-block" href="#">Click here</a></p>
</div>

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



