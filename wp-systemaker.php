<?php
   /*
   Plugin Name: Wp Systemaker
   Plugin URI: http://www.systemaker.com
   Description: This simple plugin is a boilerplate, a starter kit to add custom codes in wordpress, an agile alternative to function.php in theme
   Version: 1.0
   Author: Systemaker
   Author URI: http://www.systemaker.com
   License: GPL2
   */

/* Start your script */



   /* Option : If required another plugin
  // Eventualy conditional operation if anotherplugin is required : example : Woo commerce detection
  if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    // ... Add here your script dependent on the third plugin 
    
  } //Ends the Woocommerce detection 
  */
  
  /* option : Remove annoying metaboxes
      //http://codex.wordpress.org/Function_Reference/remove_meta_box
  */
  
  /* option : Remove WordPress Meta Boxes for a Cleaner Look
  
  // remove unnecessary page/post meta boxes
  function remove_meta_boxes() {

    // posts
    remove_meta_box('postcustom','post','normal');
    remove_meta_box('trackbacksdiv','post','normal');
    remove_meta_box('commentstatusdiv','post','normal');
    remove_meta_box('commentsdiv','post','normal');
    remove_meta_box('categorydiv','post','normal');
    remove_meta_box('tagsdiv-post_tag','post','normal');
    remove_meta_box('slugdiv','post','normal');
    remove_meta_box('authordiv','post','normal');

    // pages
    remove_meta_box('postcustom','page','normal');
    remove_meta_box('commentstatusdiv','page','normal');
    remove_meta_box('trackbacksdiv','page','normal');
    remove_meta_box('commentsdiv','page','normal');
    remove_meta_box('slugdiv','page','normal');
    remove_meta_box('authordiv','page','normal');

  }
  add_action('admin_init','remove_meta_boxes');

  */
/* end of your script */





  /*Enqueue the assets scripts*/
  function wp_systemaker_asset_script() {
      wp_enqueue_style('wp_css_systemaker', plugins_url('/css/wp-css-systemaker.css', __FILE__ ));
      wp_enqueue_script('wp_js_systemaker', plugins_url('/js/wp-js-systemaker.js', __FILE__ ), array('jquery'), '1.0', true );
  }
  add_action('init', 'wp_systemaker_asset_script', 100);
  
?>