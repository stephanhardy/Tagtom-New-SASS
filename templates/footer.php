
<footer class="content-info" role="contentinfo">
  <div class="container sidebar-footer">
    <div class="row"><?php dynamic_sidebar('sidebar-footer'); ?></div>
</div>
    <div class="container">
    <div class="row row-centered">
    <div class="col-centered">
   

<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label class="sr-only"><?php _e('Search for:', 'roots'); ?></label>
    <div class="input-group">
        <input type="search" value="<?php echo get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>">
            <span class="input-group-btn">
            <button type="submit" class="search-submit btn btn-default"><?php _e('Search', 'roots'); ?></button>
            </span>
    </div>
</form>


    </div>
    <div id="copyright-footer-input">&copy; <?php echo date('Y'); ?> <a class="footer-tagtom" href="http://www.tagtom.com"><?php bloginfo('name'); ?></a>
    </div>
</div>
</div>
<?php wp_footer(); ?>