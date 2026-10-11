<?php
if (isset($_GET["preu"]) && isset($_GET["iva"])) {
    $preu = $_GET["preu"];
    $iva = $_GET["iva"];

    $total = $preu + ($preu * $iva / 100);

    echo "Precio sin IVA: " . $preu . "<br>";
    echo "IVA aplicado: " . $iva . "%<br>";
    echo "Precio total con IVA: " . round($total, 2) . " €";
}
else {
    echo "Faltan datos";
}
?>