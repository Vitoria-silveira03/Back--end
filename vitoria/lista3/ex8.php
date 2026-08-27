<?php

$nome = "Vitória";
$senha = "1234";
$confirmarsenha = "1234";
$datanasc = "2009-07-03";

if($nome !=  "  "){
 echo "Nome válido";
}
else{
    echo "Inválido";
}
echo"<br>";
if($senha == $confirmarsenha){
    echo "Acesso liberado";
}
else{
    echo "Acesso negado";
}
echo"<br>";
echo $datanasc

?>