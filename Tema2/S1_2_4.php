<?php

function comptar($nombreMaxim = 10, $increment = 1) { 
    if ($increment <= 0) {
        echo "Error: L'increment ha de ser un nombre positiu.";
        return;
    }
    echo "Comptant fins a $nombreMaxim amb un increment de $increment:\n";

    for ($i = 0; $i <= $nombreMaxim; $i += $increment) {
        echo $i . "\n";   
    }
    echo "Fi del comptatge.\n";
}


comptar();
echo "\n";


comptar(25, 5);
echo "\n";


// Aquesta crida donarà un error perquè l'increment és negatiu
comptar(50, -2);
echo "\n";
 


?>