<?php
$senhacorreta = "123456";
$senha = "11111";
$tentativas = 0;

while($tentativas < 3){
    echo "tentativas",
    $tentativas + 1, "senha incorreta, tente novamente <br> ";
    $tentativa = $tentativas + 1;
}
echo"Acesso negado";