<?php
$nota1 = 8;
$nota2 = 7;
$frequencia = 80;

$media = ($nota1 + $nota2) / 2;

if($media >= 6 || $frequencia >= 75){
    echo("Aprovado");
}
    
else{
    echo("Reprovado");
}
