<?php
// vamos supor que importamos uma biblioteca com o msm nome da classe, para evitar o erro criamo o namespace

namespace A;

    class Cliente implements CadastroInterface {
        public $nome = 'Bruno';
        
        public function __construct() {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr){
            return $this -> $attr;
        }
        public function salvar(){
            echo 'salvar';
        }
        public function remover(){
            echo 'remover';
            
        }
}
    interface CadastroInterface {
        public function salvar();
}
    
namespace B;

    class Cliente implements CadastroInterface {
        public $nome = 'Julio';

        public function __construct() {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }
        public function __get($attr){
            return $this -> $attr;
        }
        public function remover(){
            echo 'remover';
        }
        public function salvar(){
            echo 'salvar';
            
        }
}

    interface CadastroInterface {
        public function remover();
}
//Para selecionarmos qual o nome que queremos basta adicionar a barra invertida e o nome do namespace
$c = new \A\Cliente();

echo $c->__get('nome');
$b = new \B\Cliente();

echo $b->__get('nome');
?>