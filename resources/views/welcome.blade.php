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
    $jun = "今野潤";

    $members = [
      "jun" => $jun,
      "kunio" => "くにお",
    ];

    foreach ($members as $member => $value) {
      echo $member . ":" . $value;
    }
    @endphp
  </body>
</html>
