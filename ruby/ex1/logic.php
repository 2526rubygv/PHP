<?php
if (isset($_GET["nombre"]) && isset($_GET["email"])) {
    $nom = $_GET["nombre"];
    $cognoms = $_GET["cognoms"];
    $email = $_GET["email"];
    $missatge = $_GET["missatge"];

    echo "Missatge rebut, " . $nom . " " . $cognoms . ". Gràcies per contactar. Et respondrem a " . $email;
} 

else {
    echo "Falten dades";
}
?>