<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php  bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="Ferociously Engaging Solutions for start-ups. Brand storytelling PR and marketing strategy content">
  <meta name="keywords" content="start-up, traction, messaging, playbook, brand story telling, sales pitch, PR, public relations, copywriting, content strategy, customer adoption, marketing strategy, brand positioning, disruption, tech, technology">
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <title>Brand storytelling for start-ups, with The 'Messaging playbook'</title>
  
  <?php wp_head(); ?>

  <!--[if lt IE 9]>
  <script src="js/polyfill/html5-shiv.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<!--[if IE]>
  <div class="browserupgrade"><p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p></div>
<![endif]-->
<!-- Picture Icons by Freepik.com -->


<!-- ******************* HEADER ******************* -->

<header class="brand">
<div class="wrapper">
<div class="row">

<div class="col-3 center-on-mobile">
<h1 class="brand-name__title"><!-- <a href="http://fesolutions.me"></a> -->
  
  <img src="<?php echo get_template_directory_uri();?>/img/logo40.png"/>


  <a href="<?php echo home_url(); ?>">
    <?php bloginfo('name'); ?></a>
</h1>
</div><!-- /col-6 -->
   
<!-- ******************* NAVIGATION ******************* -->
<nav>
<div class="col-9 center-on-mobile">
  <ul>
    
    <!-- Header Navigation -->
 <?php 

    $args = array(
      'theme_location' => 'header-nav'
    );

  ?>

<?php wp_nav_menu(  $args  ) ?>

  </ul>
</div>

</nav>
</div><!-- /row -->
</div><!-- /wrapper -->
</header>


<!-- ******************************************* -->
<!-- *** Design and Code by codeMattCode.com *** -->
<!-- ******************************************* -->  
