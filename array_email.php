<?php
//criando a array "cadastro"
$cadastro = [];

//criando uma array "nome" dentro da array "cadastro".
$cadastro ['nome'] = ['Daniel', 'pedro h', 'Pablo', 'Vini', 'Nathan'];

//criando uma array "email" dentro da array "cadastro"
$cadastro ['email'] = ['pedroh@gmail.com', 'daniel@gmail.com', 'pablo@gmail.com', 'vini@gmail.com', 'nathan@gmail.com'];

echo '<pre>';
print_r($cadastro);
echo '</pre>';

//alterando os valores na array nome
$cadastro ['nome'] [1]= 'Senai';
echo 'O nome Maria agora é: ';
echo $cadastro['nome'][1];
echo '<br>';
$cadastro['email'][0]='aluno@senai.br';
echo  ' A senha agora é: ';
echo $cadastro['email'][0];
echo '<br>';
print_r(cadastro);
echo '</pre>';
?>
