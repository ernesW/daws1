<?php

$a = 1;
$b = 5;
$c = 6;

function ecuacionSegundo($a, $b, $c) {
    $solucionesReales = [];

    // Calculamos el discriminante
    $discriminante = $b * $b - 4 * $a * $c;

    // Verificamos si hay soluciones reales
    if ($discriminante < 0) {
        return false; // Retornamos booleano false
    } else {
        // Calculamos las soluciones
        $sol1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $sol2 = (-$b - sqrt($discriminante)) / (2 * $a);

        // Almacenamos las soluciones en el array
        $solucionesReales[0] = $sol1;
        $solucionesReales[1] = $sol2;

        return $solucionesReales; // Retornamos las soluciones
    }
}

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
