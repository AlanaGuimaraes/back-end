<?php

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$servico = $_POST["servico"];

echo "Nome do cliente: $nome <br>";

if ($servico == "Corte") {
    echo "Valor do serviço: R$ 30,00";
}
else if ($servico == "Barba") {
    echo "Valor do serviço: R$ 20,00";
}
else if ($servico == "Corte + Barba") {
    echo "Valor do serviço: R$ 45,00";
}
else {
    echo "Serviço não encontrado.";
}

?>