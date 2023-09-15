<?php

    // Array e Objeto

    $nomeFruta = [
        "frutas" => [
            "Amora",
            "Laranja",
            "Uva"
        ],
        "nome" => [
            "Bruno",
            "Bernado"
        ]
    ];
 
    
class E {

    public function Valores($nomeFruta){ 
        print_r($nomeFruta);
        foreach($nomeFruta as $opcao){
            
            print_r($opcao);
            
        }
    }
}
$a = new E();
$a->Valores($nomeFruta);
?>

