<?php $cabecalho_title = "Cadastro de Produto"; require_once"php/includes/cabecalhoADM.php";?>

<div class="conteudo">
	<div id="formulario-cadastro">		
		<form class="formulario" method="POST">
			<fieldset>
				<legend>Cadastro de Produto</legend>
				<label>Nome:</label>
				<input type="text" name="nomPro" id="nomPro" autofocus></br>

				<label>Potência Média Watts:</label>
				<input type="text" name="potMed" id="potMed"></br>

				<label>Dias estimados Uso/Mês:</label>
				<input type="text" name="diaMes" id="diaMes"></br>

				<label>Média Utilização/Dia:</label>
				<input type="text" name="medUti" id="medUti"></br>

				<label>Consumo Médio Mensal (Kwh):</label>
				<input type="text" name="conMed" id="conMed"></br>

				

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