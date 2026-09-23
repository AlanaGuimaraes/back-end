```php
<?php

$nome = $_POST["nome"];
$horas = $_POST["horas"];

$horasANO = $horas * 365;
$anos = $horasANO / 24 / 365;

echo "Olá $nome <br><br>";
echo "Você passa aproximadamente $horasANO horas por ano <br><br>";
echo "Isso equivale a $anos anos de vida <br><br>";

?>
```
