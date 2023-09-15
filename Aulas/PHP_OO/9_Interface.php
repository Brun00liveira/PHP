<?php 
Interface EquipamentosEletronicosInterface{

    public function save();
    public function edit();
    
}
//-----------usando extends-----------------
Interface AnimalInterface{
    public function comer();
}
Interface AveInterface extends AnimalInterface{
    public function voar();
}
//-------usando mais de uma interface--------
Interface TerrestreInterface {
    public function andar();
}
interface AquaticoInterfase {
    public function nadar();
}

class Geladeira implements EquipamentosEletronicosInterface {
    public function abrirPorta(){
        echo 'Abrir a Porta';
    }
    public function edit(){
        echo 'Ligar';
    }
    public function save(){
        echo 'Ligar';
    }
}
class TV {
    public function mudarCanal(){
        echo 'Mudar canal';
    }
    public function Ligar(){
        echo 'Ligar';
    }
    public function Desligar(){
        echo 'Ligar';
    }

}
class Papagaio implements AveInterface {
    public function voar() {
        echo 'voar';
    }
    public function comer() {
        echo 'comer';
    }
}
class Humano implements TerrestreInterface, AquaticoInterfase {
    
    public function andar(){
        echo 'andar';
    }
    public function nadar(){
        echo 'andar';
    }
}

$x = new Geladeira;
$y = new TV;
$w = new Humano;
$z = new Papagaio;
echo '<pre>';
print_r(get_class_methods($y));
echo '</pre>';

echo '<pre>';
print_r(get_class_methods($x));
echo '</pre>';

echo '<pre>';
print_r(get_class_methods($w));
echo '</pre>';

echo '<pre>';
print_r(get_class_methods($z));
echo '</pre>';
?>