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
      private $name;

      public function __construct($name){
        $this->name = $name;
      }

      public function sayHi(){
        echo "Hello $this->name !";
      }
    }

    class SpecialUser extends User {
      public function sayHi(){
        echo "I am Special $this->name";
      }
    }

    $junya = new User("junya");       //Userクラス
    $kono = new SpecialUser("kono");  //SPUserクラス

    $junya->sayHi(); // Hello junya
    $kono->sayHi();  // I am Special kono

    echo $junya->name;
    ?>
  </body>
</html>
