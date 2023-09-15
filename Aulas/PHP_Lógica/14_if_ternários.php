<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- O cliente ganha frete gratuito se tiver o cartão da loja e se a comprar for superior a 100 reais -->
    <?php
        $possui_cartao_loja = true;
        $valor_compra = 500;
        $valor_frete = 50;
        $desconto_frete = true;

        if($possui_cartao_loja == true && $valor_compra >= 500) {
            $valor_frete = 0;
        
        } else if($possui_cartao_loja && $valor_compra >=400) {
            $valor_frete = 15;
            
        } else if($possui_cartao_loja && $valor_compra >=300) {
            $valor_frete = 30;
            
        } else {
            $desconto_frete = false ;
        }

    
    ?>
    <h1>Detalhe do pedido</h1>
<!-- O operador ternário tem como função refatorar os codigos com apenas 1 resposta na condição, no nosso caso é sim ou nao -->
<!--  /* CONDIÇÃO ? TRUE : FALSE 
    a ? significa: "se a for verdadeiro entao"
    : se não -->
    <p>Possui cartão da loja? <?php print $possui_cartao_loja ? 'SIM' : 'NÃO'?></p>
    <p>Valor da compra: <?php print $valor_compra ?></p>
    <p>Recebeu desconto do frete? <?php print $desconto_frete ? 'SIM' : 'NÃO'?></p>
    <p>Valor do frete: <?php print $valor_frete ?></p>
</body>
</html>