<?php
/*
 * Template Name: About
 */

?>

<!DOCTYPE>
<html>
<head>
  <title>Trifecta</title>
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/stylesheets/about.css">
  <?php get_header(); ?>
</head>
  <body>
    <div class="navbar">
         <ul>
           <li>
             <a href="?page_id=15"><div class="option">
               <div class="line-small"></div>
               <h2 class="left">home</h2>
             </div></a>
           </li>
           <li>
             <a href="?page_id=27"><div class="option">
               <div class="line-small"></div>
               <h2 class="left">buy</h2>
             </div></a>
           </li>
           <li>
             <a href="?page_id=23"<div class="option">
               <div class="line-small"></div>
               <h2 class="left">about</h2>
             </div></a>
           </li>
         </ul>
       </div>
       <div class="side-navbar">
         <ul>
           <a href="?page_id=66"><li>
             <h2>I</h2>
             <span class="sector">Primary sector</span>
           </li></a>
           <a href="?page_id=73"><li>
             <h2>II</h2>
             <span class="sector">Secondary sector</span>
           </li></a>
           <a href="?page_id=76"><li>
             <h2>III</h2>
             <span class="sector">Terciary sector</span>
           </li></a>
         </ul>
       </div>
  <div class="big-wrapper about">
    <h1>About us</h1>
    <p>Trifecta's concept lies on the organization of the human activitiy
    sector system. Whatever your job is, whatever your studies area is, whatever your ocupation there
    will be always articles to meet your interest.</p>
    <p>Our magazine is the result of a semester work to create the best kind of magazine to inform students
      of all areas and of what's new or what they might like.</p>
    <p>In each issue we compromise to bring you new and updated articles to keep you informed.</p>

    <div class="img-about-wrapper">
      <img src="<?php echo get_bloginfo('template_directory'); ?>/src/about_us_image_1.jpg">
      <img src="<?php echo get_bloginfo('template_directory'); ?>/src/about_us_image_2.jpg">
      <img src="<?php echo get_bloginfo('template_directory'); ?>/src/about_us_image_3.jpg">
      <img src="<?php echo get_bloginfo('template_directory'); ?>/src/about_us_image_4.jpg">
    </div>


    <h2>Contact us</h2>
    <span><i>trifectamagazine@gmail.com</span>
  </div>
  <?php get_footer(); ?>
</body>
