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
 * 5 * 4 *3 *2 * 1 = 120;
 * utilizar laço de repetição
 */

$numero = 5;
$fatorial = 0;

for ($numero = 5; $numero > 0; $numero-- ) {
    echo $fatorial = $numero * 5;
}
