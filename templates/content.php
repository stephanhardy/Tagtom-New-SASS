
<article <?php post_class(); ?>>
     <a href="<?php the_permalink(); ?>">
  <header class="search_results">
   <?php the_post_thumbnail(); ?>
    <h2 class="entry-title"><?php the_title(); ?></h2>
  </header>
   </a>
  <div class="entry-summary search_results_excerpt">
    <?php the_excerpt(); ?>
  </div>
 
</article>