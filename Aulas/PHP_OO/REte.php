<?php

    class f{
         
        public $lindo = null;

        function __set($atributo,$valor){
            $this->$atributo = $valor;
        }
        function __get($atributo){
            return $this->$atributo;
        }

    }
$a = new f();
 
echo $a->__get('lindo');

?>