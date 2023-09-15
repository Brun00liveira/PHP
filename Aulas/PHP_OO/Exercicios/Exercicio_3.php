<!-- Escreva uma classe Contador, que encapsule um valor usado para contagem de itens ou eventos. A classe deve oferecer métodos que devem:

Zerar;
Incrementar;
Retornar o valor do contador. >>IR PARA O CÓDIGO<< -->
<?php 

    class Contador {

        private $contador = null;
        

        public function zerar(){
            return $this->contador = 0;
        }
        public function incrementar ($soma){
            return $this->contador += $soma;
            //return $this->soma = $this->contador + 1;
        }
        public function getContador(){
            return $this->contador;
        }
        public function setContador($contador){
            $this->contador = $contador;
        } 

    }
$contador = new Contador();
echo '<pre>';
print_r($contador);
echo '</pre>';
$contador -> setContador(2);
echo $contador ->getContador();
echo '<br/>';
$contador -> incrementar(5);
echo $contador ->getContador();
echo '<br/>';
$contador -> zerar();
echo $contador ->getContador();

?>