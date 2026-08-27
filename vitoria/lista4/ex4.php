<?php

$email = "vsilveira@icloud";
$senha = "1234";
$status = "desativado";

echo "Bem vindo ao Facebook <br>";

if($email == "vsilveira@icloud" && $senha == "1234" && $status == "ativa"){
    echo "Acesso Liberado <br>";
    header("Location: https://www.facebook.com");
}
else{
    echo "Email ou senha invalido!";

}
?>