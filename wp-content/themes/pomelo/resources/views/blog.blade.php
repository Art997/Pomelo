{{--
  Template Name: Blog
--}}

@extends('layouts.app')

@section('content')
 <section id="blog-1"  data-scroll-section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12" data-scroll data-scroll-speed="1.2">
                <h1>Ostatnie wpisy</h1>
            </div>
            @php
            $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
            ); 
            $post = new WP_Query( $args );
            if ( $post->have_posts() ):
            while ( $post->have_posts() ) : $post->the_post(); 
        @endphp
        <div class="col-xl-4"  data-scroll>
            <div class="a-post-image-container">
                <a href="{!! the_permalink() !!}" class="landing-blog-a">
                    <div class="landing-blog-container">
                        <div class="landing-blog-p">
                            {!! the_title() !!}
                        </div>
                        <div style="background-image: url(' {!! get_the_post_thumbnail_url() !!} ')" class="landing-blog-img"> 
                        </div>
                    </div>  
                </a>
            </div>         
        </div>
        @php
            endwhile;
            endif;
            wp_reset_postdata(); 
        @endphp            
        </div>
    </div>
 </section>

 <section id="blog-2" data-scroll-section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <h2 data-scroll data-scroll-speed="2.0">Wszystkie wpisy</h2>
            </div>
            <div class="container-filter">
                
                <div class="container-block-faq">
                    <button aria-expanded="false">
                        <h2> 
                            Kategorie
                        </h2> 
                        <p> 
                            <svg width="38" height="19" viewBox="0 0 38 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.5714 18.9976L19 7.12412L5.42857 18.9976L-1.38977e-07 16.6229L19 0L38 16.6229L32.5714 18.9976Z" fill="black"/>
                            </svg>
                        </p>
                    </button>
                
                <div class="dropdown-block-faq">
                    @php
                    $categories = get_categories( array(
                        'orderby' => 'name',
                        'order'   => 'ASC',
                        'hide_empty' => false,
                    ) );
                    
                    foreach( $categories as $category ) {
                        $category_link = sprintf( 
                            '<a href="%1$s" alt="%2$s">%3$s</a>',
                            esc_url( get_category_link( $category->term_id ) ),
                            esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                            esc_html( $category->name )
                        );
                        
                        echo '<p>' . sprintf( $category_link ) . '<span>' . sprintf( esc_html__( '(%s)', 'textdomain' ), $category->count ) . '</span> </p> ';
            
                    } 
                    @endphp 
                </div>
            </div>
            <div class="container-block-faq">
                <button aria-expanded="false">
                    <h2> 
                        Tagi
                    </h2> 
                    <p> 
                        <svg width="38" height="19" viewBox="0 0 38 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32.5714 18.9976L19 7.12412L5.42857 18.9976L-1.38977e-07 16.6229L19 0L38 16.6229L32.5714 18.9976Z" fill="black"/>
                        </svg>
                    </p>
                </button>
            
            <div class="dropdown-block-faq">
                @php
                     $tags = get_tags(array(
                    'orderby' => 'name',
                    'order'   => 'ASC',
                    'hide_empty' => false,
                ));
                    $html = '<div class="post-tags">';
                    foreach ( $tags as $tag ) {
                        $tag_link = get_tag_link( $tag->term_id );

                        $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                        $html .= "{$tag->name}</a>";
                    }
                    $html .= '</div>';
                    echo $html;
                @endphp
            </div>
        </div>  
            </div>
        </div>
    </div>
 </section>

 <section id="blog-3" data-scroll-section>
    <div class="container-fluid">
        <div class="row">    
        @php
              $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
            $argss = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 9,
            'orderby' => 'date',
            'order' => 'DESC',
            'offset' => 3,
            'paged' => $paged,
            ); 
            $inc = 1;
            $latestpost = new WP_Query( $argss );
            if ( $latestpost->have_posts() ):
            while ( $latestpost->have_posts() ) : $latestpost->the_post(); 
            
        @endphp
        <div class="col-xl-12"  data-scroll>
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
                <div class="number-container">
                    {!! 0 . $inc !!}
                </div>
                        
                    
                </div>         
        </div>
        @php
            $inc++;
            endwhile;
            endif;
            wp_reset_postdata(); 
        @endphp        
    
        </div>
    </div>
 </section>
@endsection
