<!doctype html>
<html class="mdl-js">
@include('partials.head')
<body @php(body_class())>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header has-drawer is-upgraded">
    @php(do_action('get_header'))
    @include('partials.header')
    <div class="mdl-layout__content" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
      @php(do_action('get_footer'))
      @include('partials.footer')
    </div>
    @php(wp_footer())
  </div>
</body>
</html>
