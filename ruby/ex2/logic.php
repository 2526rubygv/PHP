<?php
if (isset($_GET["quantitat"]) && isset($_GET["convertir"])) {
    $quantitat = $_GET["quantitat"];
    $convertir = $_GET["convertir"];

    $taxa = 1.10;

    if ($convertir == "eurosadolar") {
        $resultat = $quantitat * $taxa;
        echo $quantitat . " euros son" . $resultat . "dolares.";
    }
    else {
        $resultat = $quantitat / $taxa;
        echo $quantitat . " dolares son " . $resultat . "euros.";
    }
}
else {
    echo "Faltan datos";
}
?>