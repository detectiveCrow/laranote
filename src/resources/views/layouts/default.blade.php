<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LaraNote Home</title>
  <meta name="subject" content="laravel note">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-white h-screen">
  @yield('content')

  @stack('scripts')
</body>

</html>