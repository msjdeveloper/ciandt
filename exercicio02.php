<?php

/*
Joãozinho vai morder o seu dedo 50% das vezes. Esse exercício será dividido em 2 partes. 

a) Primeiro, cria uma função chamada foiMordido() que deverá retornar  TRUE para 50% das vezes e FALSE para os outros 50%. A função rand() pode ser útil aqui.

b) Após criar a função, crie um código/página que mostre as frases “Joãozinho mordeu o seu dedo !” ou “Joaozinho NAO mordeu o seu dedo !” usando a função foiMordido() que foi criado na primeira parte.
*/

function foiMordido(){

	$tf = array();

	for ($i = 0; $i < rand() ; $i++) { 
		if ($i % 2){
			array_push($tf, true);
		}else{
			array_push($tf, false);
		}
	}
	return $tf;
}

$mordidas = foiMordido();

foreach ($mordidas as $foiMordido) {
	if ($foiMordido){
		echo 'Joãozinho mordeu o seu dedo !<br>';
	}else{
		echo 'Joãozinho NÃO mordeu o seu dedo !<br>';
	}
}

?>