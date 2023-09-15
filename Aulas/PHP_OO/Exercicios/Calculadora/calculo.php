<?php 

    class Calculator{

        

        private $valor1;
        private $valor2;
        private $resultado;

        public function getSoma($valor1,$valor2) {
            $this -> resultado = $valor1 + $valor2;
        }
        public function setSoma() {
            return $this-> resultado;
        }
        public function getSubtracao($valor1,$valor2) {
            $this -> resultado = $valor1 - $valor2;
        }
        public function setSubtracao() {
            return $this-> resultado;
        }
        public function getMultiplicacao($valor1,$valor2) {
            $this -> resultado = $valor1 * $valor2;
        }
        public function setMultiplicacao() {
            return $this-> resultado;
        }
        public function getDivisao($valor1,$valor2) {
            $this -> resultado = $valor1 * $valor2;
        }
    }

?> 