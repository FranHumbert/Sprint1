<?php
$X = 6;
$Y = 3;
$N = 6.5;
$M = 4.5;

// Operacions amb X i Y

echo "Valor de X: $X" . "\n"; //6
echo "Valor de Y: $Y" . "\n"; // 3 

//Suma 
$sumaXY = $X + $Y;
echo "Suma de X i Y: $sumaXY" . "\n"; //Suma de X i Y = 9

//Resta
$restaXY = $X - $Y;
echo "Resta de X i Y: $restaXY" . "\n"; //Resta de X i Y = 3

//Producte
$producteXY = $X * $Y;
echo "Producte de X i Y: $producteXY" . "\n"; //Producte de X i Y = 18

//Mòdul
$mòdulXY = $X % $Y;
echo "Mòdul de X i Y: $mòdulXY" . "\n"; //Mòdul de X i Y = 0

// Operacions amb N i M

echo "Valor de N: $N" . "\n"; //6.5
echo "Valor de M: $M" . "\n"; //4.5

//Suma 
$sumaNM = $N + $M;
echo "Suma de N i M: $sumaNM" . "\n"; //Suma de N i M = 11

//Resta
$restaNM = $N - $M;
echo "Resta de N i M: $restaNM" . "\n"; //Resta de N i M = 2

//Producte
$producteNM = $N * $M;
echo "Producte de N i M: $producteNM" . "\n"; //Producte de N i M = 29.25

//Mòdul
$mòdulNM = $N % $M;
echo "Mòdul de N i M: $mòdulNM" . "\n"; //Mòdul de N i M = 1.5

// Operacions amb totes les variables

//Doble de cada variable
$dobleX = $X *2;
echo "Doble de X: $dobleX" . "\n"; //Doble de X = 12

$dobleY = $Y *2;
echo "Doble de Y: $dobleY" . "\n"; //Doble de Y = 6

$dobleN = $N *2;
echo "Doble de N: $dobleN" . "\n"; //Doble de N = 13

$dobleM = $M *2;
echo "Doble de M: $dobleM" . "\n"; //Doble de M = 9

//Suma de totes les variables
$sumaTotal = $X + $Y + $N + $M;
echo "Suma de totes les variables: $sumaTotal" . "\n"; //Suma de totes les variables = 25

//Producte de totes les variables
$producteTotal = $X * $Y * $N * $M;
echo "Producte de totes les variables: $producteTotal" . "\n"; //Producte de totes les variables = 1089

//Funcio calaculadora
function  calaculadora($num1, $num2, $operador) {
    switch ($operador) {
        case '+':
            $resultat = $num1 + $num2;
            break;
        case '-':
            $resultat = $num1 - $num2;
            break;
        case '*':
            $resultat =  $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                $resultat = $num1 / $num2;
            } else {
                return "Error: Divisió per zero no és permesa.";        
            }
            break;
            default:
            return "Error: Operador no vàlid.";
        }
        return $resultat;
    }


$num1 = 10;
$num2 = 5;
$operador = '+';    
$resultat = calaculadora($num1, $num2, $operador);
echo "la suma de $num1 i $num2  es de: $resultat" . "\n"; //El resultat de la calculadora és: 15

$operador = '-';
$resultat = calaculadora($num1, $num2, $operador);  
echo "la resta de $num1 i $num2  es de: $resultat" . "\n"; //El resultat de la calculadora és: 5

$operador = '*';
$resultat = calaculadora($num1, $num2, $operador);      
echo "el producte de $num1 i $num2  es de: $resultat" . "\n"; //El resultat de la calculadora és: 504

$operador = '/';
$resultat = calaculadora($num1, $num2, $operador);  
echo "la divisio de $num1 i $num2  es de: $resultat" . "\n"; //El resultat de la calculadora és: 2


?>


