<?php
/*
Plugin Name: WordPress Simple Bio Box
Plugin URI: https://github.com/silkyland/wordpress-simbple-bio-box
Description: Adds a simple bio box to your website
Version: 1.0
Author: Bundit Nuntates
Author URI: https://devded.com
License: WTFPL
*/

function simple_bio_box_shortcode()
{
  return '<div class="simple-bio-box">
             <div class="simple-bio-box-left">
               ' . get_avatar(get_the_author_meta('ID'), 150) . '
             </div>
             <div class="simple-bio-box-right">
                <h4>' . get_the_author_meta('display_name') . '</h4>
                <p>' . get_the_author_meta('description') . '</p>
            </div>
            </div>';
}

add_shortcode('simple_bio_box', 'simple_bio_box_shortcode');

function simple_bio_box_styles()
{
  wp_enqueue_style('simple-bio-box-style', plugins_url('/css/style.css', __FILE__));
}

add_action('wp_enqueue_scripts', 'simple_bio_box_styles');
