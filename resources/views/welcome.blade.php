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
    $i = 2;

    switch ($i) {
    case 0:
      echo "iは0に等しい";
      break;
    case 1:
      echo "iは1に等しい";
      break;
    case 2:
      echo "iは2に等しい";
      break;
    default:
      echo "iは0,1,2に等しくない";
    }
    ?>
  </body>
</html>
