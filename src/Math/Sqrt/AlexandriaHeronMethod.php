<?php

namespace Math\Sqrt;

class AlexandriaHeronMethod {

  public static function squareRoot($n, $precision = 0.00001) {
    $guess = $n / 2;
    while( abs( $guess * $guess - $n ) > $precision ) {
      $guess = ($guess + $n / $guess) / 2;
    }
    return $guess;
  }
  
}

?>