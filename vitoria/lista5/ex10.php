<?php

$peso = 68;
$altura = 1.67;

$imc = $peso/($altura*$altura);

if($imc >= 19 || $imc <= 24){
    echo "Você está em peso ideal";
}
elseif($imc >= 25 || $imc <= 29){
    echo "Você tem sobrepeso";
}
elseif($imc >= 30 || $imc <= 34){
    echo "Você tem obesidade grau 1";
}
elseif($imc >= 35 || $imc <= 35){
    echo "Voê tem obesidade grau 2, cuidado!";
}
elseif($imc >= 40){
    echo "Você possui obesiddae grau 3, procure ajuda médica!";
}
?>