<?php

//criando array registro dentro de nome

$nome = array('Pedro', 'Daniel', 'Miguel', 'Manu', 'Ingrid', 'Nathan', 'Nicholas', 'Felipe', 'Yuri', 'Enzo');
$busca = "Pedro";

//fazendo busca
$indice = array_search("$busca", $nome);

// o nome presente no array e sua posição
if ($indice !== false){
    echo "$busca foi encontrada. Na posição : ". $indice;


}

else {
    echo " $busca não foi encontrada.";

}
?>