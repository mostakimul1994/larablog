<!doctype html>
<html lang="en">
  <head>
    @include('layouts.fronts._head');
  </head>
  <body>
    

    <div class="wrap">

      <header role="banner">
        @include('layouts.fronts._header');
      </header>
      <!-- END header -->

        @yield('content');
    
      <footer class="site-footer">
        @include('layouts.fronts._footer');
      </footer>
      <!-- END footer -->

    </div>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    @include('layouts.fronts._scripts');
  </body>
</html>