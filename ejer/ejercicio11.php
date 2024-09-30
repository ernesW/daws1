<?php

    $paises = [
        "Peru" => ["moneda" => "Sol", "habitantes" => 33000000],
        "España" => ["moneda" => "Euro", "habitantes" => 47400000],
        "Portugal" => ["moneda" => "Euro", "habitantes" => 10300000],
        "Argentina" => ["moneda" => "Peso", "habitantes" => 46000000]
    ];

    foreach ($paises as $pais => $info) {
        echo "País: " . $pais . ", Moneda: " . $info["moneda"] . ", Habitantes: " . $info["habitantes"] . "<br>";
    }
?>
