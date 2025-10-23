<?php
function factorial($n) {
    // Caso base: el factorial de 0 o 1 es 1
    if ($n == 0 || $n == 1) {
        return 1;
    }
    // Caso recursivo: n! = n * (n-1)!
    else {
        return $n * factorial($n - 1);
    }
}

// Ejemplo de uso
$max=10;
for($n=0; $n<=$max; $n++) {
    echo "<p>" . $n . "! = " . factorial($n) . "</p>";
}

?>
