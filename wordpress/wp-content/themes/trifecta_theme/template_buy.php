<?php
/*
 * Template Name: Buy
 */

?>
<html>
  <head>
    <title>Buy Trifecta</title>
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
       <div class="big-wrapper">
         <h1>Trifecta printed magazine</h1>
         <div class="buy-wrapper">
           <div class="info">
             <p>If you're interested in acquiring the first number of the Trifecta magazine
             head yourself to a university nearby or buy directly from here!</p>
             <span>Under construction!</span><br>
             <button>Buy here</button>
           </div>
           <div class="img-buy-wrapper">
             <img src="<?php echo get_bloginfo('template_directory'); ?>/src/buy_1.jpg">
             <img src="<?php echo get_bloginfo('template_directory'); ?>/src/buy_2.jpg">
             <img src="<?php echo get_bloginfo('template_directory'); ?>/src/buy_3.jpg">
             <img src="<?php echo get_bloginfo('template_directory'); ?>/src/buy_page_1.jpg">
             <img src="<?php echo get_bloginfo('template_directory'); ?>/src/buy_page_2.jpg">
           </div>
         </div>
       </div>

  </body>
  </html>
  <?php get_footer(); ?>
