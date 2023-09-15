<?php 

    class Variavel{

        private $variavel;
        
        public function setX($variavel){
            $this -> variavel = $variavel;
        }
        public function getX(){
            return $this -> variavel;
        }
    }

    
include 'PHP/Variaveis.php';

$var = new Variavel();

$var -> setX('15');
print_r ($var -> getX());

?>