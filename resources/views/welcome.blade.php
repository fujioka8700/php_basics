<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Vite React</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    @php
    $colors = ["赤", "黄", "青"];

    foreach ($colors as $color) {
      echo $color . nl2br(PHP_EOL);
    }
    @endphp
  </body>
</html>
