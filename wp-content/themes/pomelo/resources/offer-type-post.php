<?php

function offer_post_type()
{
    register_post_type(
        'offer',
        array(
            'labels'      => array(
                'name'          => __('Oferta', 'textdomain'),
                'singular_name' => __('Oferta', 'textdomain'),
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'show_ui' => true,
            'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
        )
    );
}
add_action('init', 'offer_post_type');
 ?>
