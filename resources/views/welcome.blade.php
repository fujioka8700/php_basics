<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Vite React</title>
    @vite(['resources/css/index.css', 'resources/js/index.js'])
  </head>
  <body>
    <ul>
      <?php for($i=0; $i<10; $i++): ?>
      <li><?php echo $i ?></li>
      <?php endfor; ?>
    </ul>
  </body>
</html>
