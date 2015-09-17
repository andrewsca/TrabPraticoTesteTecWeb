<?php $cabecalho_title = "Contato"; require_once"php/includes/cabecalho.php";?>

<div class="conteudo">
	<div id="formulario-contato">		
		<form class="formulario" method="POST">
			<fieldset>
				<legend>Entre em contato</legend>
				<label>Nome:</label>
				<input type="text" name="nome" id="nome" autofocus></br>

				<label>E-mail</label>
				<input type="email" name="email" id="email"></br>

				<label>Telefone:</label>
				<input type="text" name="telefone" id="telefone"></br>

				<label>Mensagem</label>
				<textarea></textarea>
				
				<div id="botoes">					
					<input type="submit"  value="Enviar">
				</div>
			</fieldset>
		</form>
	<div>	
		
	<?php require_once"php/includes/rodape.php";?>
</div>
	
</body>
</html>