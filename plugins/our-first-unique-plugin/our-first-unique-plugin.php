<?php

/*
    Plugin Name: Our Test Plugin
    Description: A truly amazing plugin
    Version: 1.0
    Author: Pontus
*/

add_filter('the_content', 'addToEndOfPost');

function addToEndOfPost ($content) {
    if (is_single() && is_main_query()) {
        return $content . '<p>My name is Pontus</p>';
    }

    return $content;
}