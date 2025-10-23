  <!DOCTYPE HTML>
  <html>
    <head>
      <title>Validación de Formulario en PHP</title>
      <meta charset="utf-8">
    </head>
    <body>
      <?php
        // define variables and set to empty values
        $name = $email = $gender = $comment = $website = "";
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
          $name = test_input($_GET["name"]);
          $email = test_input($_GET["email"]);
          $website = test_input($_GET["website"]);
          $comment = test_input($_GET["comment"]);
          $gender = test_input($_GET["gender"]);
        }
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
      ?>
      <h2>Ejemplo de validación de Formularios con PHP</h2>
      <form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nombre: <input type="text" name="name">
        <br><br>
        E-mail: <input type="text" name="email">
        <br><br>
        Sitio Web: <input type="text" name="website">
        <br><br>
        Comentarios: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Género:
        <input type="radio" name="gender" value="female">Femenino
        <input type="radio" name="gender" value="male">Masculino
        <br><br>
        <input type="submit" name="submit" value="Submit">
      </form>
      <?php
        echo "<h2>Usted Ingresó:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
      ?>
    </body>
  </html>