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
      //property
      public $name;

      //constructor
      public function __construct($name){
        $this->name = $name;
      }

      //method
      public function sayName(){
        echo "Hello $this->name !";
      }
    }

    $junya = new User("junya");

    $junya->sayName();

    echo $junya->name;
    ?>
  </body>
</html>
