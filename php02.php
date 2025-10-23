<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ámbito de las variables</title>
  </head>
  <body>
    <?php
      $x=5; // ámbito global
      function myTest() {
        $y=10; // ámbito local
        echo "<p>Variables de prueba dentro de una función:<p>";
        echo "Variable x es: $x";
        echo "<br>";
        echo "Variable y es: $y";
      }
      myTest();
      echo "<p>Variables de prueba fuera de una función:<p>";
      echo "Variable x es: $x";
      echo "<br>";
      echo "Variable y es: $y";
    ?>
  </body>
</html>
      