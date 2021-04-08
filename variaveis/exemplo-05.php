<?php

$nome = "Crystian";

function teste() {

    global $nome;
    echo $nome;
}

function teste2() {

    global $nome2;
    $nome2 = "João";

}

teste();
teste2();

echo $nome2 . " teste2";

?>