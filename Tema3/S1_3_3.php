<?php

function contenanLletra(array $paraules, string $lletra): bool {
    $lletra = strtolower($lletra);

    foreach ($paraules as $paraula) {

        if (strpos(strtolower($paraula), $lletra) === false) {
            return false;
        }
    }
    return true;
}

$llista = ["hola", "Php", "Html"];
var_dump(contenanLletra($llista, "h")); 
var_dump(contenanLletra($llista, "l"));  



?>