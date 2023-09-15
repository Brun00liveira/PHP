<?php 

class Exemplo {
    public static $atributo1 = 'Eu sou um atributo estático';
    public $atributo2 = 'Eu sou um atributo normal';
    
    public static function metodo1() {
        echo 'Eu sou um atributo estático';
    }
    public function metodo2() {
        echo 'Eu sou um atributo normal';
    }
}
echo Exemplo::$atributo1;
// echo Exemplo::$atributo1; Por não ser static não há como chamas com ::
echo Exemplo::metodo1();
echo Exemplo::metodo2(); // no caso do método é possivel chamar dessa forma, porem nao é viavel

?>
