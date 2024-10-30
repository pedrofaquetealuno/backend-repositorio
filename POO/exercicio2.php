<?php 

 
class Livro{ 


public $titulo = "Como Eu Era Antes de Você"; 
public $autor = 'Jojo Moyes'; 
public $anoPublicacao = '2012'; 


function exibirDetalhes(){ 

    return " O livro $this->titulo escrito por $this->autor , foi publicado em $this->anoPublicacao"; 
} 
function AlterAnoPublicacao($alterarAnoPubli){ 
    $this->anoPublicacao = $alterarAnoPubli; 

} 

} 

 
$y = new Livro(); 
echo $y -> exibirDetalhes(); 
echo '<hr>'; 
$y->AlterAnoPublicacao('2011'); 
echo $y->exibirDetalhes(); 
echo '<hr>'; 
 

?> 