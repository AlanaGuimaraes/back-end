<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

if($email == "alana.guimaraes@edu.senai.br" && $senha == "123456"){
    echo "Login realizado com sucesso!";

    }else{
        echo "Email ou senha invalido!";
    }
    ?>