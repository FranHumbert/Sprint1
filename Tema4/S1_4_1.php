<?php

include('Employe.php');

$emp1=new Employee();
$emp1->inicializar("Cesc",5000);
$emp1->imprimir();
$emp2=new Employee();
$emp2->inicializar("Paco",7000);
$emp2->imprimir();

?>