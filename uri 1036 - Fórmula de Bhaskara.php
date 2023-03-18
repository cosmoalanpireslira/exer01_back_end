<?php

// leitura das variáveis a, b e c
$entrada = explode(" ", fgets(STDIN));
$a = $entrada[0];
$b = $entrada[1];
$c = $entrada[2];

// cálculo do delta
$delta = pow($b, 2) - (4 * $a * $c);
// a função pow retorna a base b elevada ao expoente 2 

// verificação se a equação possui raízes reais
if ($a == 0 || $delta < 0) {
  echo "Impossivel calcular\n";
} else {
  // cálculo das raízes
  $x1 = (-$b + sqrt($delta)) / (2 * $a);
  $x2 = (-$b - sqrt($delta)) / (2 * $a);

  // impressão das raízes formatadas com duas casas decimais
  printf("R1 = %.5f\n", $x1);
  printf("R2 = %.5f\n", $x2);
}
?>
