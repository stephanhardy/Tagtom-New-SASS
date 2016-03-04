<?php

//Template Name: Front Page Sticky Posts


?> 


  

   <div id="sticky-posts" class="col-md-4">
     <article <?php post_class(); ?>>
             <header>
                   <h2 class="entry-title"><a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?></a></h2>
                    <?php get_template_part('templates/entry-meta'); ?>
             </header>
              <?php the_post_thumbnail(); ?>
              <div class="entry-summary">
            <?php the_excerpt(); ?>
            </div>
        </article>
   </div>






