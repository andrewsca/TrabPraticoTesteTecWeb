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
	<div id="ajuda">		
		<fieldset>
			<legend>Ajuda</legend>
		
			<a href="#" onclick="mostrar_abas(this);" id="mostra_aba1" >Tela Inicial</a> |
			<a href="#" onclick="mostrar_abas(this);" id="mostra_aba2" >Login ao Sistema</a> |
			<a href="#" onclick="mostrar_abas(this);" id="mostra_aba3" >Funcionalidades</a> |


			<p></p>
			<!-- abas -->
			<div id="div_aba1" style="display:none;">
			Conteúdo da aba 1
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			Conteúdo da aba 1
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			Conteúdo da aba 1
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			Conteúdo da aba 1
			</div>
			<div id="div_aba2" style="display:none;">
			Conteúdo da aba 2
			</div>
			<div id="div_aba3" style="display:none;">
			Conteúdo da aba 3
			</div>
		</fieldset>
	</div>	
	<?php require_once"php/includes/rodape.php";?>
</div>
	
</body>
</html>