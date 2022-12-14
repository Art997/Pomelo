@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <section id="blog-3" data-scroll-section>
    <div class="container-fluid">
        <div class="row">   
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!}
  </div>
  </div>
  </section>
@endsection
