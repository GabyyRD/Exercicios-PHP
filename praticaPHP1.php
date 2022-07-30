<?php
function areaCirculo($raio)
{
	echo(3.14*($raio*$raio)),"\n";
}

function idadeSegundos($idade)
{
	echo($idade * 31536000);
}

function main()
{
	$raio = readline();
	areaCirculo($raio);
	$idade = readline();
	idadeSegundos($idade);
}

main()
?>