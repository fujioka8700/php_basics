<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Vite React</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <?php
    abstract class BaseUser { //抽象クラス
      private $name;
      abstract public function sayHi();
    }

    class User extends BaseUser {
      private $name = "tanaka";
      public function sayHi(){
        echo "Hello {$this->name}";
      }
    }

    $user = new User();
    $user->sayHi();
    echo $user->name;
    ?>
  </body>
</html>
