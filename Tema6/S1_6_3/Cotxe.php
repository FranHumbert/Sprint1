<?php

    class Cotxe {

        private $marca;
        private $model;

        public function __construct($marca, $model) {
            $this->marca = $marca;
            $this->model = $model;
        }

        public function __toString(){
            return "Cotxe de la marca: $this->marca i model: $this->model \n";
        }
    }

?>