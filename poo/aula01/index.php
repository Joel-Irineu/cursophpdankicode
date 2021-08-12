<?php
// Introdução a POO
// - criando o objeto pessoa
class Pessoa{
    private $nome = 'irineu';
    private $idade = '20';
    private $peso = '65kg';

    public function crescer(){
        $this -> comer();
        echo ' estou crescendo';
    }

    private function comer(){
        echo ' estou comendo';
    }
}
// - instanciando objeto pessoa

$pessoa = new Pessoa;

$pessoa -> crescer();

?>