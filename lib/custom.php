<?php

/**
 * Custom functions
 */
/*** makes sure search results page has proper language category */

add_filter( 'search_rewrite_rules', 'wpse15418_search_rewrite_rules' );
function wpse15418_search_rewrite_rules( $search_rewrite_rules )
{
    global $wp_rewrite;
    $wp_rewrite->add_rewrite_tag( '%post_type%', '([^/]+)', 'post_type=' );
    $search_structure = $wp_rewrite->get_search_permastruct();
    return $wp_rewrite->generate_rewrite_rules( $search_structure . '/section/%post_type%', EP_SEARCH );
}


   // hook so we can add menus to our admin left-hand menu
add_action('admin_menu','add_my_admin_menus');

    /**
     * Create the administration menus in the left-hand nav and load the JavaScript conditionally only on that page
     */
    function add_my_admin_menus(){
        $my_page = add_menu_page('Page Title','Menu Title', 'MY_ADMIN_CAPABILITY','menu-slug','show_page_content');

        // Load the JS conditionally
        add_action('load-' . $my_page,'load_admin_js');
    }

    // This function is only called when our plugin's page loads!
    function load_admin_js(){
        // Unfortunately we can't just enqueue our scripts here - it's too early. So register against the proper action hook to do it
        add_action( 'admin_enqueue_scripts', 'enqueue_admin_js' );
    }

    function enqueue_admin_js(){
        wp_enqueue_script( 'jquery-ui-core' );
        wp_enqueue_script( 'jquery-ui-tabs' );
        // Isn't it nice to use dependencies and the already registered core js files?
        wp_enqueue_script( 'my-script', INCLUDES_URI . '/js/my_script.js', array( 'jquery-ui-core', 'jquery-ui-tabs' ) );
    }
?>