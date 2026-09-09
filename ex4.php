<?php

$numeros = [22, 2, 3, 4, 55, 6, 7, 8, 9, 19];
$maior = $numeros[0];

foreach($numeros as $num){
    if($num > $maior){
        $maior = $num;
    }
}
echo "O maior número é: $maior";