<?php

    class Exercicio1{
        //string,float,double,boolean,array,object
        private  $isPositivo = true;

        public function getNum(){
            return $this -> isPositivo;
        }
        public function setNum($isPositivo){
            $this->isPositivo = $isPositivo < 0 ? 'este numero é negativo' : 'este numero é positivo';
        }
    }
    class Exercicio2{

        private $isZero = true;

        public function getnulo(){
            return $this->isZero;
        }
        public function setnulo($isZero){
            $this->isZero = $isZero != 0 ? 'este numero não é nulo' : 'este número é nulo';
        }
    }
    class Exercicio3{

        private $a = null;
        private $b = null;
        private $c = null;
        private $resultado = null;

        public function __construct($a,$b,$c)
        {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }
        public function __get($attr){
            return $this->$attr;
        }
        public function __set($attr,$valor){
            $this->$attr = $valor;
        }
        public function formula($a,$b,$c){

            return $this->resultado = ($b * $b) - (4 * $c * $a);
        }
        public function echo(){
            return 'Baseado nos dados lidos onde A é igual a '.$this->__get('a'). ', B é '.$this->__get('b'). ' e C '.$this->__get('c').' o Delta é igual a: '. $this->formula(1,10,2);
        }

    }
//Exercicio 1    
$exercicio1 = new Exercicio1();
$exercicio1->setNum(-1);
echo $exercicio1->getNum();
echo '<hr/>';
//
//Exercicio 2
$exercicio2 = new Exercicio2();
$exercicio2->setNulo(0);
echo $exercicio2->getNulo();
echo '<hr/>';
//
//Exercicio 3
$exercicio3 = new Exercicio3('1','10','2');
echo $exercicio3->echo();

//

?>
