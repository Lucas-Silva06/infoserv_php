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
 * 5 > 0 então 5 - 1
 * Como o $fatorial está dentro do próprio resultado, então $fatorial guarda o último resultado e multiplica com $numero
 * que está sendo descontado 1 a cada passada
 * $fatorial = 5 * 4 = 20
 * $fatorial = 20 * 3 = 60
 * $fatorial = 60 * 2 = 120
 * $fatorial = 120 * 1 = 120
 */

/** 
 * Calcular o IMC de uma pessoa
 * Informar se ela está acima do peso, peso ideal ou abaixo do peso
 */ 
echo "<br>";
$peso = 70;
$altura = 1.70;
$imc = $peso / ($altura * $altura);

if ($imc <= 18.5) {
 echo "Está abaixo do peso";
}
elseif ($imc <= 24.9) {
    echo "Está no peso ideal";
    }
else { 
    echo "Está acima do peso";
}
echo "<br>";

/** 
 * Criar um algoritmo que vai simular o funcionamento de uma calculadora
 * Utilizar somente os operadores aritmeticos basicos sendo eles:
 * Operadores: + - * /
 * 
 * Após o calculo exibir o resultado da operação/calculo
 * 
 * Dica: utilizar IF ELSE ou SWITCH CASE
 * O simulador irá possuir 4 variáveis: $operador, $resultado, $valorA e $valorB
 */

$valorA = 10;
$operador = "+";
$valorB = 10;
$resultado = 0;

if ($operador == "+") {
    $resultado = $valorA + $valorB;
    echo "O resultado da operação é: $resultado";
}
elseif ($operador == "-") {
    $resultado = $valorA - $valorB;
    echo "O resultado da operação é: $resultado";
}
elseif ($operador == "*") {
    $resultado = $valorA * $valorB;
    echo "O resultado da operação é: $resultado";
}
elseif ($operador == "/") {
    $resultado = $valorA / $valorB;
    echo "O resultado da operação é: $resultado";
}
elseif ($operador == "-") {
    echo "Operador inválido. Digite o operador novamente";
}
echo "<br>";

/** 
 * Calcular a area de um quadrado. E exibir o resultado
 * Com a mensagem: A area do quadrado é:
 */

$ladoA =5;
$ladoB = 5;
$area = $ladoA * $ladoB;
echo "A área do quadrado é: $area";
echo "<br>";

/** 
 * Calcular a area de um triangulo equilatero. E exibir o resultado
 * Com a mensagem: A area do triangulo equilatero é
 */

/** 
 * Calcular a media aritmetica, harmonica e ponderada de um aluno
 * Avaliar se este aluno passou, está em recuperação ou foi reprovado
 * A media para passar é 7. Recuperação é 5. Reprovar abaixo de 5
 */

$valor1 = 10;
$valor2 = 10;
$valor3 = 10;

$mediaAritmetica = ($valor1 + $valor2 + $valor3) / 3;

if ($mediaAritmetica >= 7) {
    echo "O aluno foi aprovado com a média aritmética: $mediaAritmetica";
}
elseif ($mediaAritmetica >= 5) {
    echo "O aluno está em recuperação com a média aritmética: $mediaAritmetica";
}
else {
    echo "O aluno está reprovado com a média aritmética: $mediaAritmetica";
}
echo "<br>";

$Prova1 = 10;
$Prova2 = 10;
$Prova3 = 10;

$Peso1 = 2;
$Peso2 = 4;
$Peso3 = 6;

$numerador = ($Prova1 * $Peso1) + ($Prova2 * $Peso2) + ($Prova3 * $Peso3);
$denominador = $Peso1 + $Peso2 + $Peso3;


$mediaPonderada = $numerador / $denominador;

if ($mediaPonderada >= 7) {
    echo "O aluno foi aprovado com a média ponderada: $mediaPonderada";
}
elseif ($mediaPonderada >= 5) {
    echo "O aluno está em recuperação com a média ponderada: $mediaPonderada";
}
else {
    echo "O aluno está reprovado com a média ponderada: $mediaPonderada";
}
echo "<br>";

$Prova1 = 10;
$Prova2 = 10;
$Prova3 = 10;

$numerador = 3; // quantidade de provas
$denominador = (1 / $Prova1) + (1 / $Prova2) + (1 / $Prova3);
$mediaHarmonica = $numerador / $denominador;

if ($mediaHarmonica >= 7) {
    echo "O aluno foi aprovado com a média ponderada: $mediaHarmonica";
}
elseif ($mediaHarmonica >= 5) {
    echo "O aluno está em recuperação com a média ponderada: $mediaHarmonica";
}
else {
    echo "O aluno está reprovado com a média ponderada: $mediaHarmonica";
}
echo "<br>";

/** 
 * Calcular e exibir a tabuada do 5 utilizando FOR
 * Resultado esperado:
 * 5 x 1 = 5
 * 5 x 2 = 10
 * etc
 */

$tabuadaDo5 = 50;

/** 
 * Calcular e exibir todos os numeros pares de 2 até 50.
 * Sem pular de 2 em 2
 * Dica: utilizar formula dos numeros pares
 */

/** 
 * Calcular e exibir os 5 primeiros numeros primos.
 */
