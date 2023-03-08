<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Vite React</title>
    @vite(['resources/css/index.css', 'resources/js/index.js'])
  </head>
  <body>
    @php
    $members = [
      "jun" => "konojunya",
      "hoge" => "hogehogeo"
    ];

    var_dump($members);

    echo $members["jun"];
    @endphp
  </body>
</html>
