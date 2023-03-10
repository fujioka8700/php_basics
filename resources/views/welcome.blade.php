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
      function division($num1,$num2) {
        if($num2 === 0) {
          return "2つ目に0は指定できません。";
        } else {
          return $num1 / $num2;
        }
      }

      echo division(4, 0);
    @endphp
  </body>
</html>
