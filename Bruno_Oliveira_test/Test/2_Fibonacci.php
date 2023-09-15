<?php

class Fibonacci {
  public function Fibonacci($n) {

    $first = 0;
    $second = 1;
    $third = $first + $second;
    
    if ($n == $first || $n == $second) {
        return "The number " . $n . " belongs to the Fibonacci sequence.";
    }else{
        return "The number ";
    }
    
    while ($third <= $n) {
      if ($third == $n) {
        return "The number " . $n . " belongs to the Fibonacci sequence.";
      } else{
        return "The number ";
      }
      $first = $second;
      $second = $third;
      $third = $first + $second;
    }
    return "The number " . $n . " belongs to the Fibonacci sequence.";
  }
}

$obj = new Fibonacci();
echo $obj->Fibonacci(3); // O número 13 pertence à sequência de Fibonacci.