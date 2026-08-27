<?php

$nome = "John Wick";
$acesso = 3;

if($acesso == 1){
    echo "Bem vindo $nome. Você tem acesso básico ao sistema";
}
elseif($acesso == 2){
    echo "Bem vindo $nome. Você tem acesso intermediário ao sistema";
}
elseif($acesso == 3){
    echo "Bem vindo $nome. Você tem de administador ao sistema";
}
else{
    echo "Erro. Número de acesso inválido!";
}
?>