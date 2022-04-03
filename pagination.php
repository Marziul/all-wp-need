<?php 

    $GLOBALS['wp_query']->max_num_pages = $postquery->max_num_pages;

    the_posts_pagination(array(
        'screen_reader_text'=> ' ',
        'mid_size' => 3
    )); 
//djshds
?>
