<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php  bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">

  <title><?php bloginfo('name'); ?></title>
  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Uncomment to use -->

<!-- Social Navigation Menu -->

<!-- <?php 
    $args = array(
      'theme_location' => 'social-nav'
    );
?> -->



<!-- live content -->
<!-- *************************************************************************************************************************************************************** -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FE Messaging</title>
    <meta name="description" content="The messaging playbook will help you engage with your customers, stand out above the noise and close your sales">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
<!--[if lt IE 9]>
  <script src="js/polyfill/html5-shiv.js"></script>
<![endif]-->
  </head>
  <body>
<!--[if IE]>
  <div class="browserupgrade"><p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p></div>
<![endif]-->
<!-- Picture Icons by Freepik.com -->
<!-- ********************************* -->
<!-- ******LET THERE BE JUSTICE******* -->
<!-- ********************************* -->

<header class="brand">
<div class="wrapper">
<div class="row">

<div class="col-3 center-on-mobile">
<h1 class="brand-name__title"><!-- <a href="http://fesolutions.com"></a> -->
  <img src="img/logo40.png"><a href="<?php echo home_url(); ?>">
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


  
