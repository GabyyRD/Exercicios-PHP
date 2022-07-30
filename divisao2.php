<?php
function potencia($numerador, $denominador) 
{
    if ($denominador != 0) {
        echo $numerador / $denominador;
    } else {
        echo "Impossível dividir por zero.";
    }
}

function main()
{
    $numerador = readline();
    $denominador = readline();
    potencia($numerador, $denominador);
}

main()
?>