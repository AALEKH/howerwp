<?php

/*
Plugin Name: Rbg Images Slider
Plugin URI: http://aalekhnigam.wordpress.com/
Description: Slider for WordPress with fullscreen feature
Version: 1.0
Author: Aalekh Nigam
Author URI: http://aalekhnigam.wordpress.com/
License: MIT License
*/
function fwds_howerwp_activation() {
}
register_activation_hook(__FILE__, 'fwds_howerwp_activation');


function fwds_howerwp_deactivation() {
}
register_deactivation_hook(__FILE__, 'fwds_howerwp_deactivation');




add_action('wp_enqueue_scripts', 'howerwp_scripts');
function howerwp_scripts() {

  wp_enqueue_script('jquery');

  wp_register_script('howerwp_core', plugins_url('js/jquery.howerwp.js', __FILE__),array("jquery"));
  wp_enqueue_script('howerwp_core');

  wp_register_script('howerwp_init', plugins_url('js/howerwp.initialize.js', __FILE__));
  wp_enqueue_script('howerwp_init');

}


add_action('wp_enqueue_scripts', 'howerwp_styles');

function howerwp_styles() {

  wp_register_style('howerwp_example', plugins_url('css/howerwp.css', __FILE__));
  wp_enqueue_style('howerwp_example');

}


add_shortcode("howerwp", "fwds_howerwp_slider");
function fwds_howerwp_slider($atts) {
  extract(shortcode_atts(array(
      'no_of_images' => 1,
      'images[0]' => 'http://s.w.org/about/images/wordpress-logo-notext-bg.png'
   ), $atts));
  $plugins_url = plugins_url();
$i=0; 

$html =''; 

while ( i < no_of_images ) {
      if(i == 0)
      {
        $html.='<img src='.site_url($images[i], 'https').' id="image-of-fullscreenslider" style="visibility: visible;"/>';
      }
      else {
            $html.='<img src='.site_url($images[i], 'https').' id="image-of-fullscreenslider" style="visibility: hidden;"/>';

      }
}

echo '<div id="fullscreenslider">'.$html.'
   <div onclick="myFunction()" id="myFunction"></div>
  </br>
  <div onclick="myFunctionback()" id="myFunctionback"></div>
</div>';

  
}
?>
