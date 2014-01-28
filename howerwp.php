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
      'bordercolor' => '#D4FACD',
      'image1' => 'http://s.w.org/about/images/wordpress-logo-notext-bg.png',
      'image2' => 'http://s.w.org/about/images/codeispoetry-bg.png',
      'image3' => 'http://s.w.org/about/images/wordpress-logo-simplified-bg.png',
      'image4' => 'http://s.w.org/about/images/wordpress-logo-textonly-bg.png',
      'image5' => 'http://s.w.org/about/images/wordpress-logo-hoz-bg.png'
   ), $atts));
  $plugins_url = plugins_url();
$i=0;
$config_array = array(
            'bordercolor' => $bordercolor
        );

    wp_localize_script('howerwp.initialize', 'setting', $config_array);

echo '<div id="fullscreenslider">
      <img src="'.$image1.'" id="image-of-fullscreenslider" style="visibility: visible;"/>
      <img src="'.$image2.'" id="image-of-fullscreenslider" style="visibility: hidden;"/>
      <img src="'.$image3.'" id="image-of-fullscreenslider" style="visibility: hidden;"/>
      <img src="'.$image4.'" id="image-of-fullscreenslider" style="visibility: hidden;"/>
      <img src="'.$image5.'" id="image-of-fullscreenslider" style="visibility: hidden;"/>
   <div onclick="myFunction()" id="myFunction"></div>
   </br>
   <div onclick="myFunctionback()" id="myFunctionback"></div>
</div>'; 
}

?>
