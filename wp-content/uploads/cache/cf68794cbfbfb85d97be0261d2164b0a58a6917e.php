<?php $__env->startSection('content'); ?>
 <section id="blog-1"  data-scroll-section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12" data-scroll data-scroll-speed="1.2">
                <h1>Ostatnie wpisy</h1>
            </div>
            <?php
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
        ?>
        <div class="col-xl-4"  data-scroll>
            <div class="a-post-image-container">
                <a href="<?php echo the_permalink(); ?>" class="landing-blog-a">
                    <div class="landing-blog-container">
                        <div class="landing-blog-p">
                            <?php echo the_title(); ?>

                        </div>
                        <div style="background-image: url(' <?php echo get_the_post_thumbnail_url(); ?> ')" class="landing-blog-img"> 
                        </div>
                    </div>  
                </a>
            </div>         
        </div>
        <?php
            endwhile;
            endif;
            wp_reset_postdata(); 
        ?>            
        </div>
    </div>
 </section>

 <section id="blog-2" data-scroll-section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <h2 data-scroll data-scroll-speed="1.4">Wszystkie wpisy</h2>
            </div>
            <div class="col-xl-12">
                <div class="container-filter">   
                    <div class="container-block-faq button-category-first" data-scroll data-scroll-speed="1.5">
                        <button aria-expanded="false">
                            <h5> 
                                Kategorie
                            </h5> 
                        </button>
                    
                    <div class="dropdown-block-faq">
                        <?php
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
                            
                            echo '<p>' . sprintf( $category_link ) . ' </p> ';
                
                        } 
                        ?> 
                    </div>
                </div>
                <div class="container-block-faq button-category-second" data-scroll data-scroll-speed="2.5">
                    <button aria-expanded="false" >
                        <h5> 
                            Tagi
                        </h5> 
                    </button>
                
                <div class="dropdown-block-faq">
                    <?php
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
                    ?>
                </div>
                </div>  
                </div>
            </div>
        </div>
    </div>
 </section>

 <section id="blog-3" data-scroll-section>
    <div class="container-fluid">
        <div class="row">    
        <?php
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
            
        ?>
        <div class="col-xl-12"  data-scroll>
            <div class="post-rest-container">
                <a href="<?php echo the_permalink(); ?>" class="landing-blog-a">
                    <p class="landing-blog-p">
                        <?php echo the_title(); ?>

                    </p>
                </a>
                <div class="category-container">
                    <div class="category">
                        <?php echo the_category(); ?>

                    </div>
                    <div class="tags">
                        <?php
                        $post_tags = get_the_tags();
                        if ( ! empty( $post_tags ) ) {
                            foreach( $post_tags as $post_tag ) {
                                echo '<a href="' . get_tag_link( $post_tag ) . '">' . $post_tag->name . ' </a>';
                            }
                        }   
                    ?>
                    </div>
                </div>
                <div class="number-container">
                    <?php echo 0 . $inc; ?>

                </div>        
            </div>         
        </div>
        <?php
            $inc++;
            endwhile;
            endif;
            wp_reset_postdata(); 
        ?>        
    
        </div>
    </div>
 </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>