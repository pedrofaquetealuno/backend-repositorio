<?php


class Aluno{

    public $nome = "PH";
    public $idade = null;
    public $curso = 'Ed. Fisica';

    function exibirDadosAluno(){
        return "$this->nome $this->idade está inscrito no curso de $this->curso";

    }
    function AlterCurso($alterarcurso){
        $this->curso = $alterarcurso;
    }
}

$y = new Aluno();
echo $y -> exibirDadosAluno();
echo '<hr>';
 $y->AlterCurso('Biologia');
echo $y -> exibirDadosAluno();
echo '<hr>';

?>