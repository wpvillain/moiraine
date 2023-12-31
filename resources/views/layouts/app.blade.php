  <a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
  </a>

  @include('sections.header')

  @if(is_front_page())
  @include('sections.hero')
  @endif

    <div class="container">
      <main id="main" class="main bg-white py-8">
        <div class="container py-8 px-6 mx-auto">
          @yield('content')
        </div>
      </main>

      @hasSection('sidebar')
        <aside class="sidebar bg-white p-8 rounded-lg shadow-md">
          @yield('sidebar')
        </aside>
      @endif
    </div>
    
  @include('sections.footer')

