<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Việt Hùng</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>

<body class="text-gray-800">

  @include('shared.header')

  <div class="main relative">
    <div class="w-full max-w-7xl mx-auto py-12 px-4">
      @yield('main')
    </div>
  </div>

  @include('shared.footer')

</body>
</html>
