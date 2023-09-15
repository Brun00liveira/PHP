<?php
// Tipos basicos

// Inteiro
    class A{

        private $anoNascimento;
        

        public function setAno($variavel){
            $this -> anoNascimento = $variavel;
        }
        public function getAno(){
            if($this -> anoNascimento > 0){
                return $this -> anoNascimento;
            }else{
                return $this -> anoNascimento = 0;
            }
        }
    }
// String
    class B {

        private $nomeCompleto;
        public function setNome($variavel){
            $this -> nomeCompleto = $variavel;
        }
        public function getNome(){
            if(isset($variavel)) {
                return $this -> nomeCompleto;
            }else{
                echo 'Esta variavel não existe';
            }
        }
    }
    
// float
class C {

    private $salario;

    public function __construct($salario){
        $this -> salario = $salario;
    }
    public function __get($attr){
        return $this -> $attr;
    }
}

//Boolean

class D {
    
    private $pergunta = true;
    
    public function setBoolean($pergunta){
        $this -> pergunta = $pergunta;
    }
    public function getBoolean(){
        if($this -> pergunta > 0){
            return $this -> pergunta;
        }else{
            return 0;
        }
    }
}
$a = new A();
$b = new B();
$c = new C(2.500);
$d = new D();
$a->setAno(-2);
echo $a->getAno();
echo '<br/>';
echo '<br/>';
echo $b->getNome();
echo '<br/>';
echo '<br/>';
echo 'R$ '.$c->__get('salario').'00,00';
$d->setBoolean(-10);
echo '<br/>';
echo '<br/>';
echo $d->getBoolean();



?>
