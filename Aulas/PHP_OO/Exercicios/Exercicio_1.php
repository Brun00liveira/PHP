<?php 

    class Invoice1{

        private $numItemFaturado = null;
        private $descricaoItem = null;
        private $quantItem = null;
        private $value = null;
    
    public function __construct($numItemFaturado,$descricaoItem,$quantItem,$value){
        $this -> numItemFaturado = $numItemFaturado;
        $this -> descricaoItem = $descricaoItem;
        $this -> quantItem = $quantItem;
        $this -> value = $value;
    }
    public function getNumItemFaturado(){
        return $this -> numItemFaturado;
    }
    public function setNumItemFaturado($numItemFaturado){
        $this->numItemFaturado = $numItemFaturado;
    }
    public function getDescricaoItem(){
        return $this -> descricaoItem;
    }

    public function setDescricaoItem($descricaoItem){ 
        $this->descricaoItem = $descricaoItem;
    }
    public function getQuantItem(){
        return $this->quantItem;
    }
    
    public function setQuantitem($quantItem) {
        // if($quantItem < 0){
        //     $this->quantItem = 0;
        // }else{
        //     $this->quantItem = $quantItem;

        // }
        $this->quantItem = $quantItem < 0 ? 0 : $quantItem; 
    }
    // if()
    public function getValue(){
        return $this -> value;
    }
    public function setValue($value){
        $this->value= $value < 0 ? 0.0 : $value; 
    }
    public function getInvoiceAmount() {
        return 'Valor da fatura: '. $this->getQuantItem() * $this->getValue(). ' R$';
    }
    public function retorno(){
        return 'ID = '. $this->getNumItemFaturado().' <br/> Descrição do Item = '.$this->getDescricaoItem().' <br/> Quantidade do item = '.$this->getQuantItem().' <br/> Valor = '. $this->getValue();
        }
}

$a = new Invoice1('10','2','23','2');

echo '<pre>';
print_r ($a);
echo '</pre>';
echo $a->getInvoiceAmount()

?>