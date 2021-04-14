<?php

$condicao = true;

while ($condicao) {
    $numero = rand(1,20);

    if ($numero == 3) {
        echo "<br>Achou o 3!";
        $condicao = false;
    }
    echo $numero;
}

?>