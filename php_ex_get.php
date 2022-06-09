<html>
 <head>
  <title>php example get</title>
  <meta charset="utf-8"/>
 </head>
 <body>
  <?php
   $name = $_GET['name'];
   $surname = $_GET['surname']; 
   echo "Здравствуйте, ".$name." ".$surname."! Очень рады Вас видеть.";
  ?>
 </body>
</html>