<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João',
    'idade' => 18
));

array_push($pessoas, array(
    'nome' => 'Tiago',
    'idade' => 33
));

echo json_encode($pessoas);

$json = '[{"nome":"Pedro","idade":"21"},{"nome":"Flavio","idade":"26"}]';

$data = json_decode($json, true);

var_dump($data);

?>