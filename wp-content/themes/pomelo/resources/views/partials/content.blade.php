<div class="col-xl-12"  data-scroll>
<article @php post_class() @endphp>
  
    <div class="post-rest-container">
        <a href="{!! the_permalink() !!}" class="landing-blog-a">
            <p class="landing-blog-p">
                {!! the_title() !!}
            </p>
        </a>
        <div class="category-container">
            <div class="category">
                {!! the_category() !!}
            </div>
            <div class="tags">
                @php
                $post_tags = get_the_tags();
                if ( ! empty( $post_tags ) ) {
                    foreach( $post_tags as $post_tag ) {
                        echo '<a href="' . get_tag_link( $post_tag ) . '">' . $post_tag->name . ' </a>';
                    }
                }   
            @endphp
            </div>
        </div>   
    </div>         

</article>
</div>