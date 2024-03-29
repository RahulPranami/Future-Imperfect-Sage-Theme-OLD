<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

  <div id="main" class="main">
    @yield('content')
  </div>

  @hasSection('sidebar')
    @yield('sidebar')
  @endif

@include('sections.footer')
