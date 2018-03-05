<?php

// Data available in the Front Page view

namespace App;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    // Custom posts
    public function customPosts()
    {
        // Get posts
        $data = null;
        $args = array(
            'posts_per_page'   => -1,
            'offset'           => 0,
            'orderby'          => 'date',
            'order'            => 'DESC',
            'post_type'        => 'my-custom-post-type',
            'post_status'      => 'publish',
            'suppress_filters' => true
        );
        $the_query = new \WP_Query($args);

        // The Loop
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();

                $example_meta = (isset(get_post_custom()['_example_meta_1'][0]) ? get_post_custom()['_example_meta_1'][0] : '');

                $data[] = [
                    'id' => get_the_ID(),
                    'date' => get_the_time('F j'),
                    'title' => get_the_title(),
                    'excerpt' => get_the_excerpt(),
                    'content' => get_the_content(),
                    'permalink' => get_permalink(),
                    'example_meta_field' => $example_meta
                ];
            }
            wp_reset_postdata();
        }

        // Pass data to view
        return $data;
    }
}
