<header class="w-full z-30 top-0 py-1">
  
    <!-- <a class="brand" href="{{ home_url('/') }}">
      {!! $siteName !!}
    </a> -->

    @if (has_nav_menu('primary_navigation'))
        @include('partials.navigation')
      </nav>
    @endif
  
</header>
