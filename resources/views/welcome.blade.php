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
    interface sayHi {
      public function sayHi(); //interfaceは絶対public
    }
    interface sayHello{
      public function sayHello();
    }

    class User implements sayHi,sayHello {
      public function sayHi(){
        echo "Hi!";
      }
      public function sayHello(){
        echo "hello";
      }
    }

    $user = new User();
    $user->sayHi();
    $user->sayHello();
    @endphp
  </body>
</html>
