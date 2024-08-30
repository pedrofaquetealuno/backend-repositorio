<?php
// Criando a array chamada $cadastro
$cadastro = [];

// Criando uma array pessoas, dentro da Array Cadastro.
$cadastro['usuario'] = ['João', ' Maria', 'Pedro'];

//Criando um array usuario, dentro da array cadastro
$cadastro ['senha'] = ['1234', 'abcd', '5678'];

echo '<pre>';

echo "<hr>";

//Alterando o terceiro valor da array USUARIO
$cadastro['usuario'][1] = 'Ana';

//alterando segundo valor da array SENHA
$cadastro['senha'][1] = 'efgh';

echo "O terceiro valor da array USUARIO agora é:";
echo $cadastro['senha'][1];

echo '<pre>';
print_r($cadastro);
echo '</pre>';
?>