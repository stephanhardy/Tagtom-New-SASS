<?php
/*
Template Name: Custom Template
*/
if (is_page('portfolio') || is_page('portfolio-2') ) {    
    get_template_part( 'templates/custom', 'portfolio' );
} elseif ( is_page('blog') || is_page('blog-2') ){
    get_template_part('templates/custom', 'blog');
}  ?>