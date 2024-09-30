<?php
define('numero', 8);

echo "tabla de multiplicar del " . numero . "<br>";
for($i = 1; $i <= 10; $i++){
    $resultado = numero * $i;
    echo numero . "x" . $i . "=" . $resultado . "<br>";
}

?>

