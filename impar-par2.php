<?php
function verifica($numero)
{
    if ($numero % 2 == 0) {
        echo $numero, " é par.";
    } else {
        echo "$numero é ímpar.";
    }
}

function main()
{
    $numero = readline("Digite um número: ");
    verifica($numero);
}

main()
?>