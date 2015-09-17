<?php $cabecalho_title = "Cadastro"; require 'cabecalho.php';?>

<div class="conteudo">

	<h3>Cadastro</h3>
	<form class="formulario-cadastro" method="POST">
		<label>Nome:</label>
		<input type="text" name="username" id="username"></br>
		<label>CPF:</label>
		<input type="text" name="cpf" id="cpf"></br>
		<label>E-mail:</label>
		<input type="email" name="email" id="email"></br>
		<label>Senha:</label>
		<input type="password" name="senha" id="senha"></br>
		<label>Endereço:</label>
		<input type="text" name="endereco" id="endereco"></br>
		<label>Data Nascimento:</label>
		<input type="date" name="nascimento" id="nascimento"></br>
		<input type="submit"  value="Cadastrar">
	</form>
		
	<?php require 'rodape.php';?>
	</div>
	
</body>
</html>