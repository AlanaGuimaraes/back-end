<?php

$playlist = [
    "Exagerado",
    "Cuida do pet",
    "Aquarela",
    "Eu te seguro",
    "Purple rain",
    "Mania de você",
    "Os anjos cantam"
];

echo "Músicas da playlist:<br>";

foreach ($playlist as $musica) {
    echo $musica . "<br>";
}

echo "<br>Total de músicas: " . count($playlist);
?>
