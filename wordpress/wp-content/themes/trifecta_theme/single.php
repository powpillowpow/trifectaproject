<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp-theme
 */


?>
<html>
  <head>
    <title>Article</title>
    <?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/stylesheets/article.css">
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
             <a href="?page_id=23">
               <div class="option">
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
        <div class="article-wrapper">
          <?php
          while ( have_posts() ) : the_post();
          if(has_post_thumbnail()) :
            $img = get_the_post_thumbnail_url();
          else:
            $img = 'http://placehold.it/350x250';
          endif; ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="language-wrapper">
              <?php pll_the_languages(array('show_flags'=>1,'show_names'=>0)); ?>
            </div>
            <h1><?php the_title(); ?></h1>
            <span><?php
              $posttags = get_the_tags();
              foreach($posttags as $tag) {
                echo $tag->name . '';}
              ?></span>
            <div class="text">
              <?php
              the_content();
              ?>
            </div><!-- .entry-content -->
          </article>
        <?php endwhile; // End of the loop.
        ?>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>
  </body>
</html>
