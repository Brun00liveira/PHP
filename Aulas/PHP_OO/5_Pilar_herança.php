<!-- O Pilar da herança tem como finalidade unir metodos e os atributos repetidos em mais de uma classe -->

<?php 
// Para utilizar a classe PAI utilizamos o extends
class Carro extends Veiculo{

    public $teto_solar = null;
//  public $placa = null;
//  public $cor = null;

// Para atribuir os valores criamos um construct

    function __construct($placa,$cor,$teto_solar){
        $this->placa = $placa;
        $this->cor = $cor;
        $this->teto_solar = $teto_solar;
    }
    
    function AbrirTetoSolar(){
        echo 'Abrir teto solar';
    }
    function alterarPosicaoVolante(){
        echo 'alterar posicao volante';
    }
//    function Acelerar(){
//        echo 'acelerar';
//    }
}

class Moto extends Veiculo{

//  public $placa = null;
//  public $cor = null;
    public $contra_peso_guidao = null;

// criaremos uma construct para inserir valores
    function __construct($placa,$cor,$contra_peso_guidao){
        $this->placa = $placa;
        $this->cor = $cor;
        $this->contra_peso_guidao = $contra_peso_guidao;
    }

    function Empinar(){
        echo 'Empinar';
    }

//    function Acelerar(){
//        echo 'acelerar';
//    }

}

class Veiculo{

    public $placa = null;
    public $cor = null;

    function Acelerar(){
        echo 'acelerar';
    }
// Freiar é uma particulariedade dos dois veiculos, basta criar na class Veiculo para que seja extendidas para os dois

    function Freiar(){
        echo 'freiar';
    }

}

$car = new Carro('ABF-2132','Preto','Sim');
$mot = new Moto('ADQ-3455','Branca','Não');
echo '<pre>';
print_r($car);
print_r($mot);
echo '</pre>';

$car->AbrirTetoSolar();
echo '<br/>';
$car->Acelerar();
echo '<br/>';
$car->Freiar();

echo '<hr/>';

$mot->Empinar();
echo '<br/>';
$mot->acelerar();
echo '<br/>';
$mot->Freiar();
?>