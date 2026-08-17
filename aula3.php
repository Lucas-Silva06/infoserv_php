<?php

$nota = 7;

switch ($nota) {
    case $nota >= 7:
    echo "Aprovado";
    break;
    
    case $nota >= 5:
        echo "Recuperação";
        break;
        
        default:
        echo "Reprovado";
        }
echo "<br>";
        $perfil = "admin";

        if ($perfil == "admin") {
            echo "Administrador";
}

        elseif ($perfil == "usuario") {
            echo "Usuario comum";
        }
else {
    echo "Perfil desconhecido";
}

/** 
 * Utilizar o operador modulo %
 * Para descobrir se o numero informado pelo usuario é par
 * Se for par exibir é par e o número lido, se não exibir impar e o número lido
 */
 
echo "<br>";

$numero = 10;
$resto = $numero %2;

if ($resto == 0) {
    echo "É par:". $numero;
    echo "<br>";
}
else {
    echo "É impar:" . $numero;
}

/** 
 * Calcular o fatorial de (5!)
 * 5 * 4 * 3 * 2 * 1 = 120;
 * utilizar laço de repetição
 */

$numero = 5;
$fatorial = 1;

for ($numero = 5; $numero > 0; $numero-- ) {
$fatorial = $fatorial * $numero;
}
echo "O fatorial é: " . "$fatorial";

/**
 * Mudei o fatorial do código para 1, pois na hora que estava fazendo me toquei que se $fatorial = 0
 * então na úlitma passada e multiplicação ficaria 0.
 * Até por que qualquer número  * 0 = 0
 * Então na prática, o código está sendo executado assim:
 * $fatorial = 1 * 5 = 5
 * 5 > 0 então 5 -4
 * Como o $fatorial está dentro do próprio resultado, então $fatorial guarda o último resultado e multiplica com $numero
 * que está sendo descontado 1 a cada passada
 * $fatorial = 5 * 4 = 20
 * $fatorial = 20 * 3 = 60
 * $fatorial = 60 * 2 = 120
 * $fatorial = 120 * 1 = 120
 */