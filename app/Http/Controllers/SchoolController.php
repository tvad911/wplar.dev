<?php

namespace App\Http\Controllers;
class SchoolController extends Controller
{
    public function index()
    {
        // $query = new \WP_Query(array(
        //     'post_type' => 'post',
        //     'posts_per_page' => 20,
        //     'order' => 'ASC',
        //     'orderby' => 'post_title',
        // ));

        // $posts = $query->get_posts();
        $posts = \Post::published()->get();

        return response()->json($posts);
    }
}
