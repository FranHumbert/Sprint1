<?php

require_once 'Shape.php';

 class Triangle extends Shape{

    public function area() {
        $resultat = ($this->ample * $this->alt) / 2;
        echo "l'are del trangle es: $resultat" . "\n";
    }
 }
?>