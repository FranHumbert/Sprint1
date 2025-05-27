<?php

function info(){
    echo "Et diu a la linea que esta actualment: ". __LINE__. "\n";
    echo "La ruta completa i el nom del archiu: " . __FILE__. "\n";
    echo "Et diu el nom de la funcio: " . __FUNCTION__. "\n";
}

info();


?>
