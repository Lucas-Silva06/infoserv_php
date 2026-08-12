<?php

$nota = 7;

switch ($nota) {
    case $nota >= 7:
    echo "Aprovado";
    break;
    
    case "$nota >= 5":
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



