<?php

include './matematicas.php';

$a = 1;
$b = 5;
$c = 6;

// Llamamos a la función y capturamos el resultado
$soluciones = ecuacionSegundo($a, $b, $c);

if ($soluciones !== false) {
    // Mostramos las soluciones si existen
    echo "Solución 1: " . $soluciones[0] . "<br>";
    echo "Solución 2: " . $soluciones[1];
} else {
    echo "No hay soluciones reales.";
}


?>
