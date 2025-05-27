<?php

$X = array (10, 20, 30, 40, 50, 60);

var_dump($X);

unset ($X[1]);

var_dump($X);

$X =  array_values($X);

var_dump($X);



?>