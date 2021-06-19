<?php
/*
Crie um script PHP que mostra o nome do país e sua capital usando uma array chamada $location. Ordene a Lista pelo nome da capital e adicione pelo menos 5 entradas no array.

Exemplo do que deve ser mostrado de saída:
A capital do Brasil e Brasília
A capital dos EUA e Washington 
A capital da Espanha e Madrid 
*/

$location = array(
	'Argentina' => 'Buenos Aires',
	'Brasil' => 'Brasília',
	'Uruguai' => 'Montevideu',
	'Suíça' => 'Berna',
	'Venezuela' => 'Caracas',
	'Egito' => 'Cairo',
	'Emirados Árabes' => 'Abu Dabi',
	'Coreia do Sul' => 'Seul',
	'Canadá' => 'Otava',
	'Estados Unidos' => 'Washington',
	'Maldivas' => 'Malé',
	'Malawi' => 'Lilonge'
);

asort($location);

$preposition = '';

foreach ($location as $country => $capital) {
	
	$firstString = explode(' ', $country);

	$lastCharacter = strtolower(substr($firstString[0], -1));
	$beforeLastCharacter = strtolower(substr($firstString[0], -2, 1));	

	$lastCharacter != 'a' ? $preposition = 'do' : $preposition = 'da';

	if ($lastCharacter == 's' && ($beforeLastCharacter == 'a' || $beforeLastCharacter == 'o')) {
		$preposition = 'd'.$beforeLastCharacter.$lastCharacter;	
	}

	echo 'A capital '.$preposition.' '.$country.' é '.$capital.'<br>';
}

?>