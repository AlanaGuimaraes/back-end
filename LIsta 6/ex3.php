<?php

echo "Caixa Eletrônico - Itaú <br>";
echo "1 - consulta saldo, 2 - Fazer Saque, 3 - Fazer depósito, 4 - Ver extrato, 5 - Sair <br>";

$opcao = 3;

switch($opcao){
    case 1:
        echo "SEU SALDO É R$ 650,81";
        break;
    case 2:
        echo "QUAL VALOR?";
        break;
    case 3:
        echo "VALOR DEPOSITO";
        break;
    case 4:
        echo"Seu extrato hoje é R$10000";
        break;
    case 5:
        echo"até mais";
        break;




}
?>