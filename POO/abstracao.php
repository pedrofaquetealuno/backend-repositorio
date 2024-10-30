<?php

//modelo -> Entidade
class Funcionario {

    //Atributos -> Caracteristicas
    public $nome =null;
    public $telefone =null;
    public $numFilhos =null;

    //Método -> Ações
     function resumirCadFunc(){
      //'Esse é o resumo do cadastro do funcionario'
        return "$this->nome possui $this->numFilhos filho(s)";
     
     }
     function modificarNumFilhos($filhos){
     //Afetas um atributo do objeto
     $this->numFilhos = $filhos;
     }
   
    }
    //objeto -> Identidade
    $y = new Funcionario ();
    echo $y -> resumirCadFunc();
    echo "<hr>";
    $y->modificarNumfilhos(3);
    echo $y->resumirCadfunc();
    
?>