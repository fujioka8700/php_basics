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
    //var_dump(__LINE__); //今の行数
    var_dump(__FILE__); //そのファイルまでのパス
    // var_dump(__DIR__);  //ディレクトリのパス
    @endphp
  </body>
</html>
