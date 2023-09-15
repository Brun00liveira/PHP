<!--Construct -> Quando criamos um objeto ele é acionado
    Destruct  -> Quanndo um atributo não existe mais ele é acionado
-->

<?php
    class Pessoa{
        public $nome = null;

    function __construct($nome){
        echo 'Estamos aqui ';
        $this->nome = $nome;
    }
    function __get($atributo){
        return $this->$atributo;
    }
    function __destruct() {
        echo 'Objeto removido';
    }
    function correr() {
        return $this->nome. 'esta correndo';
    }
        
    
}

    $a = new Pessoa('Bruno'); 
    echo '<br/> Nome: '.$a-> __get('nome');
    echo '<br/>';
    echo '<br/>'. $a->correr();
    echo '<br/>';
    unset($a);
?>