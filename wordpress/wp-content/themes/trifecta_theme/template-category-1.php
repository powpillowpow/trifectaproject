<?php
/*
 * Template Name: Category One
 */

get_header();

?>
<html>
  <head>
    <title>Sector One</title>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/stylesheets/sector-page.css">
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
    <main>
      <div class="big-wrapper">
        <h1>Sector One</h1>
        <div class="article-wrapper">
          <?php $loop = new WP_Query( array(
            'orderby' => 'post_id',
            'order' => 'ASC',
            'category_name' => 'sector-one')
          ); ?>
              <?php while($loop->have_posts() ) : $loop->the_post();
              if(has_post_thumbnail()) :
                $img = get_the_post_thumbnail_url();
              else:
                $img = 'http://placehold.it/350x250';
              endif; ?>
              <div>
                <a href="<?php echo get_permalink( $loop->ID ); ?>">
                  <div class="article-content s-1-bg">
                    <h2><?php the_title(); ?></h2>
                    <img src="<?php echo $img ?>">
                  </div>
                </a>
              </div>
            <?php endwhile;
            wp_reset_query(); ?>
      </div>
    </div>
    </main>
  </body>
</html>
<?php get_footer(); ?>
