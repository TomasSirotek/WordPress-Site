<?php 

function innovationCloud_enqueue_style() {
    wp_enqueue_style("innovation-cloud-style",get_stylesheet_uri());

}

add_action("wp_enqueue_scripts","innovationCloud_enqueue_style");

?>