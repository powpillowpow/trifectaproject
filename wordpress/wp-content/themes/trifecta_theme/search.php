<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package wp-theme
 */

get_header(); ?>
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
  		<?php
  		if ( have_posts() ) : ?>
  			<div class="page-header">
  				<h1 class="page-title"><?php
  					/* translators: %s: search query. */
  					printf( esc_html__( 'Search Results for: %s', 'wp-theme' ), '<span>' . get_search_query() . '</span>' );
  				?></h1>
  			</div><!-- .page-header -->
  			<?php
  			/* Start the Loop */
  			while ( have_posts() ) : the_post();
  				/**
  				 * Run the loop for the search to output the results.
  				 * If you want to overload this in a child theme then include a file
  				 * called content-search.php and that will be used instead.
  				 */
  				get_template_part( 'template-parts/content', 'search' );

  			endwhile;

  			the_posts_navigation();

  		else :

  			get_template_part( 'template-parts/content', 'none' );

  		endif; ?>
    </div>
<?php get_footer(); ?>
