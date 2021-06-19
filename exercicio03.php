<?php
/*
Escreva uma função em PHP para pegar determinar a extensão dos 3 arquivos abaixo e mostrar as extensões na tela. As saídas devem ser mostradas em uma lista em ordem alfabética.

Arquivos de exemplo
	a) music.mp4
	b) video.mov
	c) imagem.jpeg

Saida experada:
	1 .jpeg
	2 .mov
	3 .mp4
*/

function extensaoArquivo($arquivos){

	$extensoes = array();

	if (is_array($arquivos)){
		foreach ($arquivos as $arquivo) {
			$extensaoArquivo = explode('.',$arquivo);
			array_push($extensoes, '.'.$extensaoArquivo[1]);
		}
	}

	sort($extensoes);
	
	return $extensoes;
}

$arquivos = array('a) music.mp4','b) video.mov','c) imagem.jpeg');

$extensoes = extensaoArquivo($arquivos);

for ($i = 0; $i <= sizeof($extensoes)-1; $i++) { 
	echo ($i+1).' '.$extensoes[$i].'<br>';
}

?>