<!-- Overloadin é conhecido como função magica que tem como proposito diminuir o numer de métodos no codigo, ao em vez de criar uma função para cada atributo, cria-se uma função com 2 valore,neste caso, onde $atributo é o $this->atributo e o $valor é o valor do atributo -->

<?php 

class funcionarios{

    public $nome = null;
    public $filhos = null;
    public $telefone = null;
    public $cargo = null;
    public $salario = null;

    //getters setters (overloading / sobre)

    function __set($atributo,$valor){
        $this->$atributo = $valor;
    }
    function __get($atributo){
        return $this->$atributo;
    }
    function cadastro() {
        return 'Meu nome é '.$this->__get('nome'). ' tenho '. $this->__get('filhos'). ' filhos, sou '. $this->__get('cargo'). ' ganha um média salarial de '. $this->__get('salario'). ' Para entrar em contato ligue para: '.$this->__get('telefone');
    }

}
$a = new funcionarios();
$a -> __set('nome','Bruno');
$a -> __set('filhos',0);
$a -> __set('telefone','9 9223-9232');
$a -> __set('cargo','desenvolvedor');
$a -> __set('Salario','0,00 R$');
echo $a->cadastro();
?>