<?php
/*
 *
 * Roots.io searchform.php template hack to fix Polylang search
 *
 * Note: Polylang setting 'Hide URL language info for default language' should be enabled for this to work. 
 * Soil-nice-search disabled in Roots.
*/

 if(function_exists('pll_current_language')){
    $current_language = pll_current_language();
  $default_language = pll_default_language();
  if($current_language != $default_language){
      $language_subdir = $current_language.'/';
   }
 else {
    $language_subdir = '';
 }
}

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/'.$language_subdir)); ?>">
  <label class="sr-only"><?php _e('Search for:', 'roots'); ?></label>
  <div class="input-group inner-addon left-addon">
    <span class="glyphicon glyphicon-search"></span>
    <input type="search" value="<?php echo get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>">
    <span class="input-group-btn">
      <button type="submit" class="search-submit btn btn-default"><?php _e('Search', 'roots'); ?></button>
  </div>
</form>

