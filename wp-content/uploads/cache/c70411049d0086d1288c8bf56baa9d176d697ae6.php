<article <?php post_class() ?> class="single-blog-post">
  <header>
    <h1 class="entry-title"><?php echo get_the_title(); ?></h1>
   
  </header>
  <div class="entry-content">
    <?php the_content() ?>
  </div>
  sdsdsd
  <footer>
    <?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

  </footer>
</article>
