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
        $valor_compra = 400;
        $valor_frete = 50;
        $desconto_frete = false;

        if($possui_cartao_loja == true && $valor_compra >= 500) {
            $valor_frete = 0;
        
        } else if($possui_cartao_loja && $valor_compra >=400) {
            $valor_frete = 15;
            
        } else if($possui_cartao_loja && $valor_compra >=300) {
            $valor_frete = 30;
            
        } else {
            $desconto_frete = false;
        }

    
    ?>
    <h1>Detalhe do pedido</h1>

    <p>Possui cartão da loja?
        <?php
            if($possui_cartao_loja == true) {
                echo 'SIM';
            } else {
                echo 'NÃO';
            }
        ?>
    </p>
        <p>Valor da compra: <?php print $valor_compra ?></p>

        <p>Recebeu desconto do frete?
        <?php
            if($desconto_frete == true) {
                echo 'SIM';
            } else {
                echo 'NÃO';
            }
        ?>
        </p>
        <p>Valor do frete: <?php print $valor_frete ?></p>
</body>
</html>