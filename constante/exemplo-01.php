<?php

define("SERVIDOR", "127.0.0.1");
define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'test'
]);

echo SERVIDOR . "<br>";
echo PHP_VERSION . "<br>";
echo DIRECTORY_SEPARATOR . "<br>";
print_r(BANCO_DE_DADOS);


?>
