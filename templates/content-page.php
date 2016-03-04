<?php while (have_posts()) : the_post(); ?>
  <?php the_post_thumbnail('responsive-image'); ?>
  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
