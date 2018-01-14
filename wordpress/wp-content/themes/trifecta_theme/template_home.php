  <?php
  /*
   * Template Name: Homepage
   */

  ?>

 <!DOCTYPE>
 <html>
   <head>
     <title>Trifecta News</title>
     <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/stylesheets/home_page.css">
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
     <div class="big-wrapper home">
       <div class="header-wrapper">
         <div class="info-wrapper">
           <h1>Trifecta</h1>
           <span>Check the latest articles of the Trifecta magazine</span>
        </div>
         <?php get_search_form();?>
       </div>
       <div class="container">

	<!-- // ARTICLES // -->
	<?php $loop = new WP_Query( array(
		'orderby' => 'post_id',
		'order' => 'ASC' )
	); ?>

	<div class="article">
			<?php while($loop->have_posts() ) : $loop->the_post();
        if(has_post_thumbnail()) :
          $img = get_the_post_thumbnail_url();
        else:
          $img = 'http://placehold.it/350x250';
        endif; ?>
					<a href="<?php echo get_permalink( $loop->ID ); ?>">
            <img src="<?php echo $img ?>">
            <h2><?php the_title(); ?></h2>
            <span>
              <?php $posttags = get_the_tags();
              foreach($posttags as $tag) {
                echo $tag->name . '<br>';} ?>
            </span>
          <?php the_excerpt(); ?>
			    </a>
			<?php endwhile;
			wp_reset_query(); ?>
		</div>
	</div>

</div>
     </div>
     <div class="get-trifecta-wrapper">
     </div>
   </body>
   </html>
   <?php get_footer(); ?>
