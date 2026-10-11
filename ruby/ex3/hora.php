<?php
date_default_timezone_set("Europe/Madrid");

$hora = date("H");
$hora_completa = date("H:i:s");

if ($hora >= 5 && $hora < 14) {
    echo "Bon dia";
}
elseif ($hora >= 14 && $hora < 19) {
    echo "Bona tarda";
}
else {
    echo "Bona nit";
}

echo "<br>";
echo "Hora del servidor: " . $hora_completa;
?>