<?php
wp_enqueue_style('bootstrap.min', get_template_directory_uri() . "/css/bootstrap.min.css");
 wp_enqueue_style('style', get_stylesheet_uri());
 wp_enqueue_style('wp-core.css', get_template_directory_uri() . "/css/wp-core.css");
 wp_enqueue_script("jquery", "https://code.jquery.com/jquery-3.2.1.slim.min.js", null, null, true);
 wp_enqueue_script("popper", "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js", null, null, true);
 wp_enqueue_script("bootstrap-js", get_template_directory_uri() . "/js/bootstrap.min.js", null, null, true);
