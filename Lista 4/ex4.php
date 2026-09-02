<?php

$email = "seuemail@gamil.com";
$senha = "suasenhai123";
$ativo = true;
echo "login - Facebook <br>";

if($email=="seuemail@gamil.com" && 
    $senha == "suasenhai123" && $ativo == true){
        echo "login autorizado...";
    }
    else{
        echo "usuario ou senha invalida";
    }
    ?>