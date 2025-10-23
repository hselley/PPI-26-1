<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form + PHP</title>
</head>
<body>
    <h1>Factorial en PHP</h1>
    <p>Ingrese un número positivo</p>
    <form method="post">
        <label for="numero">Ingrese un número</label>
        <input type="number" name="numero" id="numero" required min="0" step="1"> 
        <input type="submit" value="Calcular">
    </form>


    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n = intval($_POST["numero"]);
            echo "<p>" . factorial($n) . "</p>";
        }

        function factorial($n) {
            if($n==0 || $n==1) {
                return(1);
            } else {
                return($n*factorial($n-1));
            }
        }        
    ?> 
</body>
</html>