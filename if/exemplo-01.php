<?php

$suaIdade = 16;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeIdoso = 65;

if ($suaIdade < $idadeCrianca ) {
    echo "você é uma criança!";
} else if ( $suaIdade >= $idadeCrianca && $suaIdade < $idadeMaior ) {
    echo "Você é um adolescente!";
} else if ( $suaIdade >= $idadeMaior && $suaIdade < $idadeIdoso ) {
    echo "Você é um adulto!";
} else {
    echo "Você é um idoso!";
}

?>