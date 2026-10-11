<?php
if (isset($_GET["estilo"])) {
    $estilo = $_GET["estilo"];

    if ($estilo == "k-pop") {
        echo "";
    }
    elseif ($estilo == "regueton") {
        echo "";
    }
    elseif ($estilo == "pop") {
        echo "";
    }
    elseif ($estilo == "hip-hop") {
        echo "";
    }
    elseif ($estilo == "rock") {
        echo "";
    }
    elseif ($estilo == "electronica") {
        echo "";
    }
}
else {
    echo "Faltan datos";
}