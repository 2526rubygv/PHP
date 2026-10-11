<?php
if (isset($_GET["estilo"])) {
    $estilo = $_GET["estilo"];

    if ($estilo == "k-pop") {
        echo "Adoro el k-pop, es un estilo musical muy popular y con una gran base de fans en todo el mundo.";
    }
    elseif ($estilo == "regueton") {
        echo "El regueton no puede faltar en ninguna fiesta, es un estilo musical muy bailable y con mucho ritmo.";
    }
    elseif ($estilo == "pop") {
        echo "El pop es perfecto para bailar y cantar a todo volumen con tus amigos.";
    }
    elseif ($estilo == "hip-hop") {
        echo "El hip-hop es ritmo y letras con mucho flow.";
    }
    elseif ($estilo == "rock") {
        echo "El rock nunca muere!! Prepara tus oídos para escuchar guitarras eléctricas y baterías potentes.";
    }
    elseif ($estilo == "electronica") {
        echo "La electrónica te hace bailar sin parar, que no se detenga!!.";
    }
}
else {
    echo "Faltan datos";
}