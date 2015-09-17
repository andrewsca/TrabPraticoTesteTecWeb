<?php $cabecalho_title = "Cadastro"; require_once"php/includes/cabecalho.php";?>

<div class="conteudo">
	<div id="formulario-cadastro">		
		<form class="formulario" method="POST">
			<fieldset>
				<legend>Cadastro no Sistema</legend>
				<label>Nome:</label>
				<input type="text" name="username" id="username" autofocus></br>

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

				<div id="botoes">					
					<input type="submit"  value="Cadastrar">
				</div>
			</fieldset>
		</form>
	<div>	
	<?php require_once"php/includes/rodape.php";?>
	</div>
	
</body>
</html>