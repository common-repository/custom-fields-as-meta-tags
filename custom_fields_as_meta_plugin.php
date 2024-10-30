<?php
/*
Plugin Name: Custom Fields as meta tags
Plugin URI: http://www.ibexoft.com
Description: Add custom fields of post as meta tag in head section.
Version: 0.1
Author: Muhammad Jawaid Shamshad | Ibexoft
Author URI: http://www.ibexoft.com
License: GNU Public License
*/

function ibx_custom_field_meta(){
    if (is_single()){
    	$custom_fields = get_post_custom();
    	foreach ($custom_fields as $key => $value) {
    		echo '<meta name="'.$key.'" content="'.implode(",", $value).'">';
    	}
    }
}
add_action('wp_head','ibx_custom_field_meta');