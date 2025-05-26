<?php

require_once 'Shape.php';

class Rectangle extends Shape{

    public function area() {
        $resultat = ($this->ample * $this->alt);
        echo "L'area del rectangle es: $resultat" . "\n";
    }
}