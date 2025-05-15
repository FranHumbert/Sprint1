<?php
function verificarGrau($nota) {
    if ($nota >= 60) {
        return "Primera dicvisio";
    }
    elseif ($nota >= 45 && $nota < 60) {
        return "Segona dicvisio";
    }
    elseif ($nota >= 33 && $nota < 45) {
        return "Tercera dicvisio";
    }
    else {
        return "Reprovat";  
    }
}


$notaEstudiant = 55;
$grau = verificarGrau($notaEstudiant);      
echo "La nota de l'estudiant és $notaEstudiant% i el grau és: $grau\n"; //La nota de l'estudiant és 55% i el grau és: Segona dicvisio

$notaEstudiant = 80;
$grau = verificarGrau($notaEstudiant);
echo "La nota de l'estudiant és $notaEstudiant% i el grau és: $grau\n"; //La nota de l'estudiant és 80% i el grau és: Primera dicvisio

$notaEstudiant = 40;
$grau = verificarGrau($notaEstudiant);  
echo "La nota de l'estudiant és $notaEstudiant% i el grau és: $grau\n"; //La nota de l'estudiant és 40% i el grau és: Tercera dicvisio

$notaEstudiant = 25;
$grau = verificarGrau($notaEstudiant);      
echo "La nota de l'estudiant és $notaEstudiant% i el grau és: $grau\n"; //La nota de l'estudiant és 25% i el grau és: Reprovat