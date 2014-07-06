<!doctype html>
  <html land="en">
    <head>
      <meta charset="utf-8">
      <title>Testing Flash messaging</title>
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    </head>
  <body>
    @include('partials/_flash')

    @yield('content')

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script> $('.flash-modal').modal();</script>
  </body>
</html>