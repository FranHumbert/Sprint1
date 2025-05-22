<?php           

class Employee {

    protected $nom;
    protected $sou;

    public function inicializar ($nom, $sou) {
        $this->nom = $nom;
        $this->sou = $sou;
    }

    public function imprimir() {
        echo "El nom " . $this->nom . " amb un sou de " . $this->sou . "\n";
        if($this->sou > 6000)
        echo "Te que pagar impostos" . "\n";
        else
        echo "No te que pagar impostos" . "\n";
    }


}
?>