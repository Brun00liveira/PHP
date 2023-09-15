<?php 
    echo '(1) Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".';
    echo '<br/><br/>';
    $a = 0;
    if($a < 0) {
        echo '('.$a. ') => Este número é negativo';
    } elseif ($a > 0) {
        echo '('.$a. ') => Este número é positivo';
    } else{
        echo ''.$a. ' => Este número é nulo';
    }
    echo '<hr/>';
    echo '(2) Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado, ex: <br/>
    Entrada = 4 <br/>
    Saída = 4 X 0 = 0...4 X 10 = 40.<br/>';
    echo '<br/><br/>';

    $b = 10;
    
    for($c = 0; $c <= 10; $c++) {
        echo $b.'x'.$c.'= '.$b*$c.'<br/>';
    }
    echo '<hr/>';
    echo '(2) Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o resultado na tela. Ex: Entrada = 3 Processamento: (3 * 2) * 1 Saída: 6';
    echo '<br/><br/>';
    
    $num = 2;
    $fatorial = $num;
    if($num > 0) {
    for($decresce = ($fatorial - 1);$decresce > 0;$decresce--) {
        $fatorial = $fatorial*$decresce;
    }
    echo 'O fatorial de '.$num.' é ' .$fatorial;
    } else{
        echo 'O valor é nulo';
    }

    echo '<hr/>';
    echo '(3)Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão). receber 2 números. Realize a operação escolhida em cada um dos números. ';
    echo '<br/><br/>';

    $num1 = 2;
    $num2 = 3;
    $sinal = '-';
    switch($sinal) {
        case"+":
            $result = ($num1 + $num2);
        break;
        case"-":
            $result = ($num1 - $num2);
        break;
        case"*":
            $result = ($num1 * $num2);
        break;
        case"/":
            $result = ($num1 / $num2);
        break;
    }
    echo $num1.''.$sinal. $num2.' = '.$result;

    echo '<hr/>';
    echo '(4)Solicite a entrada de um número e descubra se um número digitado é par ou ímpar.';
    echo '<br/><br/>';

    $numero = 0;
    $par_impar = $numero % 2;
    if($numero > 0) {
    switch($par_impar) {
        case "0":
            echo "$numero é par";
        break;
        case "1":
            echo "$numero é impar";
        break;
        }
    } else{
        echo "$numero é nulo";
    }

    echo '<hr/>';
    echo '(5)Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores';
    echo '<br/><br/>';
    
    $number1 = 10;
    $number2 = 0;
    //crescente
    if($number1 < $number2) {
        for($n = $number1;$n <= $number2;$n++){
            echo "$n ";
        }
    //decrescente
    }else {
        for($n = $number1;$n >= $number2;$n--){
            echo "$n ";
    
        }
    }
    echo '<hr/>';
    echo '(6)Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de três notas e as insira em um array, por fim, calcule a média geral. Caso a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada.';
    echo '<br/><br/>';
    
    
  $notas = [5, 10, 4];
  $smTotal = 0;

  for($i = 0; $i < count($notas); $i++){
    $smTotal += $notas[$i];
  }

  $resultado = $smTotal / count($notas);

  if($resultado >= 6){
    echo "Aprovado, média final {$resultado}";
  }else{
    echo "Reprovado, média final {$resultado}";
  }


    

?>