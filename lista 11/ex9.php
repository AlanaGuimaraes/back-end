<?php

$peso = $_POST["peso"];

if ($peso > 50) {

    $excesso = $peso - 50;
    $multa = $excesso * 4;

    echo "Peso dos peixes: $peso kg<br>";
    echo "Excesso: $excesso kg<br>";
    echo "Multa: R$ $multa,00";

} else {

    echo "Peso dos peixes: $peso kg<br>";
    echo "Não há multa.";

}

?>