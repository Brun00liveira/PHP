<!-- utilizando Overloading -->

<?php 

    class Invoice{

        public $numItemFaturado = null;
        public $descricaoItem = null;
        public $quantCompradaItem = null;
        public $value = null;

        function __set($atributo,$valor) {
            $this->$atributo = $valor;
        }
        function __get($atributo) {
            return $this->$atributo;
        }
        function getInvoiceAmount() {
            return 'Valor da fatura: '.$this->__get('quantCompradaItem') * $this->__get('value'). ' R$';
        }
        
        function cadastro(){
            return 'ID do item vendido : '. $this->__get('numItemFaturado'). '<br/>
                    Descrição do item vendido : '. $this->__get('descricaoItem'). '<br/>
                    Quantidade de item vendido : '. $this->__get('quantCompradaItem'). '<br/>
                    Preço do item vendido : '. $this->__get('value'). '<br/>' ;

        }
        

}
$Inv = new Invoice();
$Inv -> __set('numItemFaturado',1);
$Inv -> __set('descricaoItem','Parafusos para a placa mãe');
$Inv -> __set('quantCompradaItem','400');
$Inv -> __set('value',0.20);
echo $Inv->cadastro();
echo '<br/>';
echo $Inv->getInvoiceAmount();

echo '<hr/>';

$Inv1 = new Invoice();
$Inv1 -> __set('numItemFaturado',2);
$Inv1 -> __set('descricaoItem','Parafusos para o SSD');
$Inv1 -> __set('quantCompradaItem','200');
$Inv1 -> __set('value',0.30);
echo $Inv1->cadastro();
echo '<br/>';
echo $Inv1->getInvoiceAmount();


echo '<hr/>';

$Inv2 = new Invoice();
$Inv2 -> __set('numItemFaturado',3);
$Inv2 -> __set('descricaoItem','Memorias');
$Inv2 -> __set('quantCompradaItem','30');
$Inv2 -> __set('value',230.01);
echo $Inv2->cadastro();
echo '<br/>';
echo $Inv2->getInvoiceAmount();


echo '<hr/>';

$Inv3 = new Invoice();
$Inv3 -> __set('numItemFaturado',4);
$Inv3 -> __set('descricaoItem','Cabos de rede');
$Inv3 -> __set('quantCompradaItem','20');
$Inv3 -> __set('value',23.23);
echo $Inv3->cadastro();
echo '<br/>';
echo $Inv3->getInvoiceAmount();

