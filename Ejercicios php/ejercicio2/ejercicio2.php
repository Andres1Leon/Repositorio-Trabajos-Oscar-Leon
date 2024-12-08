<?php
function filtrarPares($array){
    return array_filter($array, fn($numero) => $numero % 2 ==0);
}

$nmumeros = [1,2,3,4,5,6];
$pares = filtrarPares($nmumeros);
print_r($pares);
?>