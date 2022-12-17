<section id="page-header-blog" data-scroll-section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12">
        <div class="page-header">
          <h1><?php echo App::title(); ?></h1>
        </div> 
      </div>
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
