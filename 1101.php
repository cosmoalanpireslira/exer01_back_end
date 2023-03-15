<?php

while(true) { // loop infinito
    $entrada = fgets(STDIN); // lê a entrada
    $valores = explode(' ', $entrada); // separa os valores da entrada em um array

    $m = intval($valores[0]); // converte o primeiro valor para inteiro
    $n = intval($valores[1]); // converte o segundo valor para inteiro

    if($m <= 0 || $n <= 0) { // se algum dos valores for menor ou igual a zero, encerra o programa
        break;
    }

    // caso m seja maior que n, troca os valores de m e n
    if($m > $n) {
        $temp = $m;
        $m = $n;
        $n = $temp;
    }

    $soma = 0; // inicializa a variável soma

    // percorre os valores de m a n, imprimindo-os e somando-os
    for($i = $m; $i <= $n; $i++) {
        echo $i . " ";
        $soma += $i;
    }

    echo "Sum=" . $soma . "\n"; // imprime a soma
}

?>
