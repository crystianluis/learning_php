<?php

echo "Hello World!";

$nome = "Crystian Luis";
$sobrenome = "Kammler";
$nomeCompleto = $nome . " " . $sobrenome;

echo "<br/>";
//echo $nome;
//echo "<br/>";
var_dump($nome);
echo "<br/>";

//unset($nome);

if(isset($nomeCompleto)){
    echo $nomeCompleto;
}

?>