<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php  bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<nav class="site-nav">

  <div class="wrapper">

  <div class="row">
    <div class="col-12">
    <div class="social-nav">
      <?php 
    
          $args = array(
            'theme_location' => 'social-nav'
          );
        ?>
        <?php wp_nav_menu(  $args  ) ?>
    </div>
    </div>

  </div>

  </div><!-- /wrapper -->
</nav>





<!-- site header -->
  <header>
      <div class="wrapper">
  
  <h1><a href="<?php echo home_url(); ?>">
  <?php bloginfo('name'); ?></a></h1>
  
  <h2><?php bloginfo('description') ?></h2>
  

  <div class="site-nav">
    <div class="row">
      
        <div class="col-12">
        <div class="header-nav">

        <?php 
    
          $args = array(
            'theme_location' => 'header-nav'
          );
        ?>
        <?php wp_nav_menu(  $args  ) ?>

       </div>
      </div>
      
    </div>
  </div>


      </div><!-- /wrapper -->
  </header>

<div class="wrapper">
