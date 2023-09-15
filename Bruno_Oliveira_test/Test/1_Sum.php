<?php 

class Sum {

    public $INDICE = 13;
    public $SOMA  = 0;
    public $K = 0;
    
    function calculateSum () {
        while ($this->K < $this->INDICE) {
            $this->K = $this->K + 1;
            $this->SOMA += $this->K;
        }
        echo $this->SOMA;
    }
}
$test = new Sum();
$test->CalculateSum();