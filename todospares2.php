<?php
function par($numerolimite, $numero = 0)
{
    if ($numerolimite < 0) {
        $numerolimite *= -1;
        par($numerolimite, $numero);
    } else {
        for ($numerolimite = 0; $numerolimite <= $numero; $numerolimite ++) {
            if ($numero % 2 == 0) {
                echo $numerolimite, "\n";
            }
        }
    }
}

function main()
{
    $numero = readline("Digite um número: ");
    par($numerolimite);
}

main()
?>