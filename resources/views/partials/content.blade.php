<article @php(post_class())>
  <header>
    <h2 class="entry-title mb-2">
        <a href="{{ get_permalink() }}" class="text-lg font-bold">
          {!! $title !!}
        </a>
      </h2>

    @include('partials.entry-meta')
  </header>

  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>
