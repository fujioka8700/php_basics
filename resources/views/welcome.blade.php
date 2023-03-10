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
    function division($num1,$num2){
      try {
        if($num2 === 0){
          throw new Exception("can not use 0");
        }
        return $num1 / $num2;
      } catch (Exception $e) {
        return $e->getMessage();
      }
    }

    echo division(4, 0);
    @endphp
  </body>
</html>
