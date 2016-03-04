<?php
/*
 * Template Name: Custom-blog page
 * Description: A Page Template with a darker design.
 */
 
get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>


<div id="latest-posts" class="container">
     <section id="latest-front-page-posts" class="row">  
    <?php $the_query = new WP_Query( 'showposts=2' ); ?>

    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    
        <article class="col-md-4 col-sm-6">
            <a href="<?php the_permalink() ?>">
                <div class="post-thumbnail" ><?php the_post_thumbnail(); ?>
                </div>
            
                 <div class="post-without-thumbnail">        
                    <h2 class="title"><?php the_title(); ?>
                    </h2>
                    <p rel="author" class="date"><?php get_template_part('templates/entry-meta-blog'); ?>
                    </p>
            </a>
                    <p><?php the_excerpt() ?></p>
                </div>    
        </article>
    
    <?php endwhile;?>
    </section>
  </div>
<?php wp_reset_query(); ?>


