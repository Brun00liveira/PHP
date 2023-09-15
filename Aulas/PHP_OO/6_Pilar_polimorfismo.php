<?php 

    class Carro extends Veiculo{

    public $abriTetoSolar = null;

    function __construct($placa,$cor,$abriTetoSolar){
        $this->placa = $placa;
        $this->cor = $cor;
        $this->abriTetoSolar = $abriTetoSolar;
        }

    function abrirTetoSolar(){
        echo 'Abrir teto solar';
    }
    function alterarPosicaoVolante(){
        echo 'Alterar posicao volante';
    }
}

    class Moto extends Veiculo{

    public $empinar = null;

    function __construct($placa,$cor,$empinar){
        $this->placa = $placa;
        $this->cor = $cor;
        $this->empinar = $empinar;
    }

    function empinar(){
        echo 'Abrir teto solar';
    }
    //como o modo de trocar a marcha da moto é diferente, entao criamos um método diferente só para ele
    function trocarMarcha() {
        echo 'Desengatar embreagem com o mão e engatar marcha com o pé';
    }
}   

    class veiculo{

    public $placa = null;
    public $cor = null;


    function acelerar(){
        echo 'Acelerando';
        }
    
    function freiar() {
        echo 'Freiar';
    }
    function trocarMarcha() {
        echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
    }
}
    class Caminhao extends Veiculo {}

$car = new Carro('ABR2132','Branco','Sim');
$mot = new Moto('OFO2513','Preto','Não');
$cam = new caminhao();
echo '<hr/>';
$car->trocarMarcha();
echo '<br/>';
$mot->trocarMarcha();
echo '<br/>';
$cam->trocarMarcha();

//como podemos observar o unico valor alterado é somente o da moto, o caminhão continua sendo o mesmo processo do carro.

?>