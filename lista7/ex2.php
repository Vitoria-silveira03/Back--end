<?php

function verificadeIdade($idade) {
    if ($idade >= 18) {
        return "Você é maior de idade. Pode tirar carta <br><br>";
    } else {
        return "Você é menor de idade. Só de Uber rs <br><br>";
    }
}  
echo verificadeIdade(17);
echo verificadeIdade(44);
echo verificadeIdade(15);
echo verificadeIdade(18);
?>