<article @php post_class() @endphp class="single-blog-post">
  <header>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
   
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  sdsdsd
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>
