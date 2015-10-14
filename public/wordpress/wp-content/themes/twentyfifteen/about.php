<?php
/**
 * Getting page from Wordpress
 */

// Getting page by ID
$page = get_post(1234);

// Getting page by slug
$query = new WP_Query(array(
    'post_type' => 'page',
    'posts_per_page' => 1,
    'name' => 'about', // here the 'about' is the page slug you stored in wordpress when creating the page
));
$page = array_shift($query->get_posts()); // first post returned

// Getting page by template name
$templateFileName = 'about.php'; // here you must use the PHP FILE we've created in the theme folder
$query = new WP_Query(array(
    'post_type' => 'page',
    'my-taxonomy-name-here' => 'my-term-slug-here',
    'posts_per_page' => 1,
    'meta_key' => '_wp_page_template',
    'meta_value' => $templateFileName,
));
$page = array_shift($query->get_posts());