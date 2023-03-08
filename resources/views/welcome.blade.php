<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Vite React</title>
    @vite(['resources/css/index.css', 'resources/js/index.js'])
  </head>
  <body>
    <?php
    $a = 20;
    $b = 10;

    if ($a > $b)
      echo "aはbより大きい";
    else
      echo "aはbより小さい";
    ?>
  </body>
</html>
