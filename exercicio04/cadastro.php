<?php

if (empty($_POST)){
	echo 'Sem dados';
	return false;
}

$dados = array(
	'nome' => $_POST['nome'],
	'sobrenome' => $_POST['sobrenome'],
	'email' => $_POST['email'],
	'telefone' => preg_replace("/[^0-9]/", "", $_POST['telefone']),
	'login' => $_POST['login'],
	'senha' => md5($_POST['senha'])
);

$nome_arquivo = 'dados/registro.txt';

if (file_exists($nome_arquivo)) {
	$array_dados = file_get_contents($nome_arquivo);
	$last_id = 0;

	echo '<pre>';print_r(json_decode($array_dados));exit;

	foreach ($array_dados as $key => $value) {
		if ($value['email'] == $_POST['email'])
			throw new Exception("E-mail já cadastrado!", 1);

		if ($value['login'] == $_POST['login'])
			throw new Exception("Login já cadastrado!", 2);

		$last_id = $value['id'];
	}

	$dados['id'] = $last_id;

	file_put_contents("dados/registro.txt", json_encode($dados), FILE_APPEND);

	header('Locaction: index.php');
}else{

	$dados['id'] = 1;

	file_put_contents("dados/registro.txt", json_encode($dados), FILE_APPEND);

	header('Locaction: index.php');
}

?>