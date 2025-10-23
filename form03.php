<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Validación en PHP</title>
    <style>
      .error {color: #FF0000;}
    </style>
  </head>
  <body>
    <?php
      // Variables que contendrán un posible mensaje de error
      $nameErr = $emailErr = $genderErr = $websiteErr = "";
      // Variables que guardan el contenido de los campos del formulario
      $name = $email = $gender = $comment = $website = "";
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameErr = "Nombre necesario";
        } else {
          $name = test_input($_POST["name"]);
          // verificar si el nombre contiene solo letras y espacios en blanco
          if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Solo se permiten letras y espacios en blanco";
          }
        }
        if (empty($_POST["email"])) {
          $emailErr = "Email necesario";
        } else {
          $email = test_input($_POST["email"]);
          // verificar si la direccion de correo es valida
          if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
            $emailErr = "Formato de dirección inválido";
          }
        }
        if (empty($_POST["website"])) {
          $website = "";
        } else {
          $website = test_input($_POST["website"]);
          // verifica si la URL es válida (la expresion regular también permite guiones en la URL)
          if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "URL con capacidades diferentes";
          }
        }
        if (empty($_POST["comment"])) {
          $comment = "";
        } else {
          $comment = test_input($_POST["comment"]);
        }
        if (empty($_POST["gender"])) {
          $genderErr = "Genero necesario";
        } else {
          $gender = test_input($_POST["gender"]);
        }
      }
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>
    <h2>Ejemplo de Validación de Formularios con PHP</h2>
    <p><span class="error">* campo requerido.</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Nombre: <input type="text" name="name" value="<?php echo $name;?>">
      <span class="error">* <?php echo $nameErr;?></span>
      <br><br>
      E-mail: <input type="email" name="email" value="<?php echo $email;?>">
      <span class="error">* <?php echo $emailErr;?></span>
      <br><br>
      Website: <input type="text" name="website" value="<?php echo $website;?>">
      <span class="error"><?php echo $websiteErr;?></span>
      <br><br>
      Comentario: <textarea name="comment" rows="5" cols="40"></textarea>
      <br><br>
      Genero:
      <input type="radio" name="gender"
      <?php if (isset($gender) && $gender=="femenino") echo "checked";?>
      value="femenino">Femenino
      <input type="radio" name="gender"
      <?php if (isset($gender) && $gender=="masculino") echo "checked";?>
      value="masculino">Masculino
      <span class="error">* <?php echo $genderErr;?></span>
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