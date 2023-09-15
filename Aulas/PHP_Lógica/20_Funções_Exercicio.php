<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #titulo{
            text-align: center;
        }
        table{
            text-align: center;
            margin: auto;
        }
        th, td{
            border: 1px solid black;
            padding: 8px;
            
        }
       
    </style>
</head>
<body>
    <div id=titulo>
        <h3>Imposto de renda</h3>
        <br />
        <p>Tabela de juros em relação ao sálario</p><br/>
    </div>
    <div id=tabela>
        <table>
            <tr>
                <th>Base de cálculo</th>
                <th>Alíquota</th> 
            </tr>
            <tr>
                <td>Até R$ 1.903,98</td>
                <td>Isento</td> 
            </tr> 
            <tr>
                <td>De R$ 1.903,98 até R$ 2.826,66</td>
                <td>7,5%</td> 
            </tr>
            <tr>
                <td>De R$ 2.826,66 até R$ 3.751,05</td>
                <td>15%</td> 
            </tr>
            <tr>
                <td>De R$ 3.751,05 até R$ 4.664,48</td>
                <td>22,5%</td> 
            </tr>
            <tr>
                <td>Acima de R$ 4.664,48</td>
                <td>27,5%</td> 
            </tr>
        </table>
    </div>
    <div id=codigo>
        <?php
            function calcularImposto($salario) {
                $imposto = 0; 
                if($salario <= 1903.98){
                    $imposto = 0;
                    } else if($salario >= 1903.98 && $salario <= 2826.66 ) {
                        $imposto = ($salario*7.5)/100;
                    } else if($salario >= 2826.66 && $salario <= 3751.05 ) {
                        $imposto = ($salario*15)/100;
                    } else if($salario >= 3751.05 && $salario <= 4664.48 ) {
                        $imposto = ($salario*22.5)/100;
                    } else if($salario >= 4664.48 ) {
                        $imposto = ($salario*25)/100;
                    }
                    return $imposto;
                } 
                echo calcularImposto(2000)

        ?>
    </div>
</body>
</html>