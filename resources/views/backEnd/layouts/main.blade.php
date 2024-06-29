<!DOCTYPE html>
<html lang="en">
    @include('backEnd.layouts.head')
    <body class="d-flex flex-column min-vh-100">
      @include('backEnd.layouts.sidebar')
      <main id="main" class="main">
          @yield('content')
      </main>
      @include('backEnd.layouts.footer')
      @include('backEnd.layouts.script')
    </body>
</html>