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
    class User {
      public $name;
      public static $count = 0;
      public function __construct($name){
        $this->name = $name;
        self::$count++;
      }
      public static function getMes(){
        echo "Hello from static!";
      }
    }

    User::getMes();

    $tom = new User("tom");
    $tom->getMes();

    echo User::$count;
    ?>
  </body>
</html>
