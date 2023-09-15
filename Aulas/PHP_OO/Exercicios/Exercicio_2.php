<?php

class Empregados{
    
    private $nome = null;
    private $sobrenome = null;
    private $salario = null;


    public function __construct($nome,$sobrenome,$salario){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->salario = $salario;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function setSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function setSalario($salario){
        $this->salario = $salario < 0 ? 0.0 : $salario;   
    }
    public function salarioAnual(){
        return $this->getSalario() * 12;
    }
    public function AumentoSalario(){
        return $this->getSalario() * 0.1;
    }
}

$a = new Empregados('Bruno','Oliveira','2000');

echo '<pre>';
print_r ($a);
echo '</pre>';
echo $a->salarioAnual();
echo '<br/>';
echo $a->AumentoSalario();
?>