<!-- Esses metodos tem a funcionalidade de auxiliar no tratamento do dados 

No exemplo do Funcionario da aula anterior utilizamos, nas variaveis, valores fixos e isso será alterado utilizando o valor null, assim quando usarmos um retorno só aparecerá valores que foram atribuidos no NEW
-->

<?php 

    class funcionarios{

        //atributos
        
        public $nome = null;
        public $numTelefone = null;
        public $numFilhos = null;

        // getter e setters
        //getters recebem um valor e manipulam o valor sem retorno
        function setNome($nome){
            $this->nome = $nome;
        }
        function setNumTelefone($numTelefone){
            $this->numTelefone = $numTelefone;
        }
        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }
        //setters modificam os valores originais e da o retorno
        function getNome(){
            return $this->nome;
        }

        function getNumFilhos(){
            return $this->numFilhos;
        }

        function getNumTelefone(){
            return $this->numTelefone;
        }


    }
    $a = new funcionarios();
    $a->setNome('Bruno');
    $a->setNumTelefone('9 2123-2323');
    $a->setNumFilhos(0);
    echo $a->getNome() . ' possui ' . $a->getNumFilhos() . ' filho e seu telefone é ' . $a->getNumTelefone();
    echo '<br/>';
    echo '<hr/>';
    $b = new funcionarios();
    $b->setNome('Carlos');
    $b->setNumTelefone('9 4334-1233');
    $b->setNumFilhos(2);
    echo $b->getNome() . ' possui ' . $b->getNumFilhos() . ' filho e seu telefone é ' . $b->getNumTelefone();
    echo '<br/>';
    echo '<hr/>';
    
?>