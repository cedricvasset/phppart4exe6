<?php
$age = 34;
$name = ' Vasset';
$lastname = 'Cédric'
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>php part4 ex5</title>
      <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <?php
    function string($string1, $string2, $string3){
      return 'Bonjour ' . $string1 . $string2 . ' ,tu as ' . $string3 . ' ans.' ;
    }
    echo string( $lastname, $name, $age);
    ?>
  </body>
</html>
