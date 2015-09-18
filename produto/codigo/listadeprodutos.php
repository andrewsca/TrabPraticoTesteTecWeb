<?php $cabecalho_title = "Lista de Produtos"; require_once"php/includes/cabecalho.php";?>

<div class="conteudo">

<table>
  <caption>Lista de Produtos</caption>
  <thead>
    <tr>
      <th>Aparelhos Elétricos</th>
	  <th>Potência Média Watts</th>
	  <th>Dias estimados Uso/Mês</th>
	  <th>Média Utilização/Dia</th>
	  <th>Consumo Médio Mensal (Kwh)</th>	
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Aparelho de som pequeno</td>
      <td>20</td>
      <td>30</td>
      <td>4h</td>
      <td>2,4</td>
    </tr>
    <tr>
      <td>Aquecedor de ambiente</td>
      <td>1550</td>
      <td>15</td>
      <td>8h</td>
      <td>186,0</td>
    </tr>
    <tr>
      <td>Aquecedor de mamadeira</td>
      <td>100</td>
      <td>30</td>
      <td>15min</td>
      <td>0,75</td>
    </tr>
    <tr>
      <td>Ar condicionado 7.500 BTU</td>
      <td>1000</td>
      <td>30</td>
      <td>8h</td>
      <td>120</td>
    </tr>
    <tr>
      <td>Ar condicionado 10.000 BTU</td>
      <td>1350</td>
      <td>30</td>
      <td>8h</td>
      <td>162</td>
    </tr>    
  </tbody>
</table>
		
<?php require_once"php/includes/rodape.php";?>
</div>
	
</body>
</html>