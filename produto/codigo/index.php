<?php $cabecalho_title = "Principal"; require_once"php/includes/cabecalho.php";?>

<div class="conteudo">

	<section id="login">
		<form class="formulario-login">
			<fieldset>
				<legend>Entrar no Sistema</legend>

				<label>Nome:</label>
				<input type="text" name="username" id="username"></br>

				<label>Senha:</label>
				<input type="password" name="senha" id="senha"></br>

				<div id="btn_lgn">					
					<input type="submit"  value="Entrar">
				</div>
				</fieldset>
			</form>

	</section>

	<section id="bandeiras">
		<fieldset>
			<legend>Bandeiras Tarifarias</legend>
			<ul>
				<li>set/2015</li>
				<li>ago/2015</li>
				<li>jul/2015</li>
			</ul>

		</fieldset>
	</section>
		
	<?php require_once"php/includes/rodape.php";?>	
</div>

</body>
</html>