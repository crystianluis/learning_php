<?php

$condicao = true;

while ($condicao) {
    $numero = rand(1,20);

    if ($numero == 3) {
        echo "<br>Achou o ";
        $condicao = false;
    }
    echo $numero . " ";
}

?>