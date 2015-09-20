<?php $cabecalho_title = "Ajuda"; require_once"php/includes/cabecalho.php";?>

<script>
function mostrar_abas(obj) {

	  document.getElementById('div_aba1').style.display="none";
      document.getElementById('div_aba2').style.display="none";
      document.getElementById('div_aba3').style.display="none";
      

   switch (obj.id) {
      case 'mostra_aba1':
      document.getElementById('div_aba1').style.display="block";
      break
      case 'mostra_aba2':
      document.getElementById('div_aba2').style.display="block";
      break
      case 'mostra_aba3':
      document.getElementById('div_aba3').style.display="block";
      break
   }
}

</script>

<div class="conteudo">
	<div id="ajuda" class="textos">		
		<fieldset>
			<legend>Ajuda</legend>
		
			<a href="#" onclick="mostrar_abas(this);" id="mostra_aba1" >Tela Inicial</a> |
			<a href="#" onclick="mostrar_abas(this);" id="mostra_aba2" >Login ao Sistema</a> |
			<a href="#" onclick="mostrar_abas(this);" id="mostra_aba3" >Funcionalidades</a> |


			<p></p>
			<!-- abas -->
			<div id="div_aba1" style="display:none;">
			</br>
			<p>Na pagina inicial você encontra no menu principal os itens Cadastrar, 
				Lista de Produtos, Relatorios, contato e ajuda.</br>
				No canto direito voce encontra a caixa para fazer login ao sistema. Logo abaixo
				é possivel acompanhar as bandeiras tarifarias linkadas diretamente com o site
				da cemig.</p>			
			</div>
			<div id="div_aba2" style="display:none;">
			</br>
			<p>Para logar ao sistema é preciso que você faça o cadastro no site na aba cadastrar</p>
			</div>
			<div id="div_aba3" style="display:none;">
			</br>
			<p>Área pessoal: o interessado pode cadastrar seus dados pessoais: nome, CPF,
				email, senha, endereço e data de nascimento, bem como alterá-los, se assim o desejar.</br></br>

				Os usuários podem, após o cadastro, montar um perfil de consumo, no qual
				buscam e selecionam produtos disponíveis no sistema e informam, para cada
				um, uma estimativa de uso em horas semanais ou diárias.</br></br>

				O sistema estima o consumo mensal do usuário e informa o
				valor da conta de energia prevista.</br></br>

				Usuário pode criar uma meta de economia em KW/h ou
				porcentagem, e o sistema informa qual redução de uso deve ser feita em
				um ou mais produtos cadastrados para que a meta seja atingida</p>
			</div>
		</fieldset>
	</div>	
	<?php require_once"php/includes/rodape.php";?>
</div>
	
</body>
</html>