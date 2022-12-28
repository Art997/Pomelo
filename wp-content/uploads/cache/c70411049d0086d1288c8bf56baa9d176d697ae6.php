<article <?php post_class() ?> class="single-blog-post">
  <section id="single-blog-1" style="background-image: url('<?php echo the_post_thumbnail_url('large'); ?>')" data-scroll-section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-6 background-title-blog" data-scroll>
          <div class="container-tittle" data-scroll data-scroll-speed="2.1">
            <h1 class="single-post-title" data-scroll data-scroll-speed="2.05"><?php echo get_the_title(); ?></h1>
            <p data-scroll data-scroll-speed="1.9"><?php echo the_excerpt(); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="single-blog-2" data-scroll-section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-12" data-scroll data-scroll-speed="1.3">
          <?php the_content() ?>
        </div>
        <div class="col-xl-6">
          <div class="single-tags-container">
            <?php
                $post_tags = get_the_tags();
                if ( ! empty( $post_tags ) ) {
                    foreach( $post_tags as $post_tag ) {
                        echo '<a href="' . get_tag_link( $post_tag ) . '">' . $post_tag->name . '</a>';
                    }

                }   
            ?>
        </div>          
        </div>
        <div class="col-xl-6">
          <div class="single-category-container">
            <?php echo the_category(); ?>

          </div>
        </div>
        <div class="col-xl-12">
          <div class="pagination-single-post">
            <div class="alignleft arrow-single-blog">
              <?php echo previous_post_link(); ?>

            </div>
            <div class="alignright arrow-single-blog">
              <?php echo next_post_link(); ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</article>
