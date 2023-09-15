<?php

    class superGlobais{

    public $nome;

    public function Get(){
        return (int)($_GET['a']);
    } 
    public function Server(){
        return $_SERVER['SCRIPT_NAME'];
    }
}

$a = new superGlobais();
var_dump($a->Get());
echo '<br/>';
echo '<br/>';
var_dump($a->Server());

?>