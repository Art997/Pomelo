<?php

function realization_post_type()
{
    register_post_type(
        'realization',
        array(
            'labels'      => array(
                'name'          => __('Realizacje', 'textdomain'),
                'singular_name' => __('Realizacje', 'textdomain'),
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'show_ui' => true,
            'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
        )
    );
}
add_action('init', 'realization_post_type');
 ?>
