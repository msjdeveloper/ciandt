<?php /*
Crie um formulário contendo os campos (Nome, Sobrenome, e-mail, telefone, login & senha) e salve as submissões dentro de um arquivo chamado registros.txt. Itens mandatórios para esse exercicio:

	a) Os registros devem ser salvos dentro de um array() incremental no arquivo registros.txt

	b)  O formulário deverá validar os campos email e telefone aceitando somente os formatos aceitáveis

	c) Se possivel nao salvar email ou logins que ja foram registrados anteriormente

	d) O campo senha deverá ser salvo encriptado. 
*/
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

		<title>Formulário Exercício 04</title>
	</head>
	<body>
		<form method="POST" action="cadastro.php" data-toggle="validator" id="form-cadastro">
			<div class="container">
				<div class="row">
					<div class="col">
						<label for="nome" class="form-label">Nome</label>
						<input type="text" name="nome" id="nome" class="form-control" data-error="Por favor, informe um nome" required>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-6">
						<label for="sobrenome" class="form-label">Sobrenome</label>					
						<input type="text" name="sobrenome" id="sobrenome" class="form-control"  data-error="Por favor, informe um sobrenome" required>
						<div class="help-block with-errors"></div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label for="email" class="form-label">E-mail</label>
						<input type="email" name="email" id="email" class="form-control" data-error="Por favor, informe um e-mail correto." required>
    					<div class="help-block with-errors"></div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label for="telefone" class="form-label">Telefone</label>
						<input type="text" name="telefone" id="telefone" class="form-control" data-error="Por favor, informe um telefone correto." maxlength="11" required>
    					<div class="help-block with-errors"></div> 	
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label for="login" class="form-label">Login</label>
						<input type="text" name="login" id="login" class="form-control" data-error="Por favor, informe um login" required>
						<div class="help-block with-errors"></div> 	
					</div>
					<div class="col-6">
						<label for="senha" class="form-label">Senha</label>					
						<input type="password" name="senha" id="senha" class="form-control"  data-error="Por favor, informe uma senha" required>
						<div class="help-block with-errors"></div> 	
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-primary">Enviar</button>
			</div>
		</form>
			
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    	<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    	<script type="text/javascript" src="validacao.js"></script>

    	<script type="text/javascript">
    		$(document).ready(function(){	    			
    			$("#telefone").mask(mascara, options);
    		});
    	</script>
	</body>
</html>