<!doctype html>
<html>
<head>
  @include('includes.head')
</head>
<body>
  <div class="container">
    <header class="row">
      @include('includes.header')
    </header>
    @yield('content')
    @include('includes.footer')
  </div>
</body>
</html>