<?php
/**
 * Register sidebars and widgets
 */
function roots_widgets_init() {
  // Sidebars
  register_sidebar(array(
    'name'          => __('Primary', 'roots'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'name'          => __('Footer', 'roots'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget col-md-3 %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));


  //Add Main Page Widget Area 1
  register_sidebar(array('name'=>'homepagewidget1',
  'before_widget' => '<section class="col-sm-12">',
  'after_widget' => '</section>',
  'before_title' => '<h1>',
  'after_title' => '</h1>',
  ));

//Add Main Page Widget Area About 2
  register_sidebar(array('name'=>'homepagewidget2_1_en_vedette',
  'before_widget' => '<section class="section_en_vedette">',
  'after_widget' => '</section>',
  'before_title' => '<h2 class="">',
  'after_title' => '</h2>',
  ));  

//Add Main Page Widget Area About 2
  register_sidebar(array('name'=>'homepagewidget2_2_en_vedette',
  'before_widget' => '<section class="section_en_vedette">',
  'after_widget' => '</section>',
  'before_title' => '<h2 class="">',
  'after_title' => '</h2>',
  ));  

//Add Main Page Widget Area About 2
  register_sidebar(array('name'=>'homepagewidget2_3_en_vedette',
  'before_widget' => '<section class="section_en_vedette">',
  'after_widget' => '</section>',
  'before_title' => '<h2 class="">',
  'after_title' => '</h2>',
  ));  


  //Add Main Page Widget Area Our Services
  register_sidebar(array('name'=>'homepagewidget3_services', 
  'before_widget' => '<section class="services">',
  'after_widget' => '</section>',
  'before_title' => '<h2>',
  'after_title' => '</h2>',
  ));

  //Add Main Page Widget Area - Service 1
  register_sidebar(array('name'=>'homepagewidget3_1_services',
  'before_widget' => '<section>',
  'after_widget' => '</section>',
  'before_title' => '<div class="panel-heading"><h4 class="text-center panel-title"><a data-toggle="collapse" data-parent="services-panel" href="#sectionA">',
  'after_title' => '</a></h4></div>',
  ));

  //Add Main Page Widget Area - Service 2
  register_sidebar(array('name'=>'homepagewidget3_2_services',
  'before_widget' => '<section>',
  'after_widget' => '</section>',
  'before_title' => '<div class="panel-heading"><h4 class="text-center panel-title"><a data-toggle="collapse" data-parent="services-panel" href="#sectionB">',
  'after_title' => '</a></h4></div>',
  ));

  //Add Main Page Widget Area - Service 3
  register_sidebar(array('name'=>'homepagewidget3_3_services',
  'before_widget' => '<section">',
  'after_widget' => '</section>',
  'before_title' => '<div class="panel-heading"><h4 class="text-center panel-title"><a data-toggle="collapse" data-parent="services-panel" href="#sectionC">',
  'after_title' => '</a></h4></div>',
  ));

  //Add Main Page Widget Area - Service 4
  register_sidebar(array('name'=>'homepagewidget3_4_services',
  'before_widget' => '<section>',
  'after_widget' => '</section>',
  'before_title' => '<div class="panel-heading"><h4 class="text-center panel-title"><a data-toggle="collapse" data-parent="services-panel" href="#sectionD">',
  'after_title' => '</a></h4></div>',
  ));

  // Widgets
  register_widget('Roots_Vcard_Widget');
}
add_action('widgets_init', 'roots_widgets_init');

/**
 * Example vCard widget
 */
class Roots_Vcard_Widget extends WP_Widget {
  private $fields = array(
    'title'          => 'Title (optional)',
    'street_address' => 'Street Address',
    'locality'       => 'City/Locality',
    'region'         => 'State/Region',
    'postal_code'    => 'Zipcode/Postal Code',
    'tel'            => 'Telephone',
    'email'          => 'Email'
  );

  function __construct() {
    $widget_ops = array('classname' => 'widget_roots_vcard', 'description' => __('Use this widget to add a vCard', 'roots'));

    $this->WP_Widget('widget_roots_vcard', __('Roots: vCard', 'roots'), $widget_ops);
    $this->alt_option_name = 'widget_roots_vcard';

    add_action('save_post', array(&$this, 'flush_widget_cache'));
    add_action('deleted_post', array(&$this, 'flush_widget_cache'));
    add_action('switch_theme', array(&$this, 'flush_widget_cache'));
  }

  function widget($args, $instance) {
    $cache = wp_cache_get('widget_roots_vcard', 'widget');

    if (!is_array($cache)) {
      $cache = array();
    }

    if (!isset($args['widget_id'])) {
      $args['widget_id'] = null;
    }

    if (isset($cache[$args['widget_id']])) {
      echo $cache[$args['widget_id']];
      return;
    }

    ob_start();
    extract($args, EXTR_SKIP);

    $title = apply_filters('widget_title', empty($instance['title']) ? __('vCard', 'roots') : $instance['title'], $instance, $this->id_base);

    foreach($this->fields as $name => $label) {
      if (!isset($instance[$name])) { $instance[$name] = ''; }
    }

    echo $before_widget;

    if ($title) {
      echo $before_title, $title, $after_title;
    }
  ?>
    <p class="vcard">
      <a class="fn org url" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a><br>
      <span class="adr">
        <span class="street-address"><?php echo $instance['street_address']; ?></span><br>
        <span class="locality"><?php echo $instance['locality']; ?></span>,
        <span class="region"><?php echo $instance['region']; ?></span>
        <span class="postal-code"><?php echo $instance['postal_code']; ?></span><br>
      </span>
      <span class="tel"><span class="value"><?php echo $instance['tel']; ?></span></span><br>
      <a class="email" href="mailto:<?php echo $instance['email']; ?>"><?php echo $instance['email']; ?></a>
    </p>
  <?php
    echo $after_widget;

    $cache[$args['widget_id']] = ob_get_flush();
    wp_cache_set('widget_roots_vcard', $cache, 'widget');
  }

  function update($new_instance, $old_instance) {
    $instance = array_map('strip_tags', $new_instance);

    $this->flush_widget_cache();

    $alloptions = wp_cache_get('alloptions', 'options');

    if (isset($alloptions['widget_roots_vcard'])) {
      delete_option('widget_roots_vcard');
    }

    return $instance;
  }

  function flush_widget_cache() {
    wp_cache_delete('widget_roots_vcard', 'widget');
  }

  function form($instance) {
    foreach($this->fields as $name => $label) {
      ${$name} = isset($instance[$name]) ? esc_attr($instance[$name]) : '';
    ?>
    <p>
      <label for="<?php echo esc_attr($this->get_field_id($name)); ?>"><?php _e("{$label}:", 'roots'); ?></label>
      <input class="widefat" id="<?php echo esc_attr($this->get_field_id($name)); ?>" name="<?php echo esc_attr($this->get_field_name($name)); ?>" type="text" value="<?php echo ${$name}; ?>">
    </p>
    <?php
    }
  }
}
