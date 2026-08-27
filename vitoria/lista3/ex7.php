<?php

$valor = 150;
$valorminimoentrega = 70;
$idadecliente = 19; 
$idademinimabebidaalcoolica = 18;
$estoque = 5;
$quantidadepedida = 3;
$statuspedido = "pago";

if($valor >= $valorminimoentrega){
    echo "Entrega liberada";
}
else{
    echo "Compre mais para liberar ";
}
echo"<br>";
if($idadecliente >= 18){
    echo "Compra liberada";
}
else{
    echo "Compre quando for maior de idade!";
}
echo"<br>";
if($quantidadepedida <= $estoque){
    echo "Pedido aceito";
}
else{
    echo "Pedido não aceito ";
}
echo"<br>";
if($statuspedido == "pago"){
    echo "Liberado para produção";
}
else{
    echo "Aguardando liberação";
}
?>