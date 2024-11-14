<h1>Listar Consulta</h1>
<?php
include 'E:\Xampp\htdocs\programacaoweb\config.php';# - pc casa
#include 'C:\xampp\htdocs\Emanuela\Projeto\config.php';# - pc faculdade
$sql = "SELECT * FROM consulta AS c 
		INNER JOIN paciente AS p
		ON p.id_paciente = c.paciente_id_paciente
		INNER JOIN medico AS m
		ON m.id_medico = c.medico_id_medico
";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if($qtd > 0){
	print"<p>Encontrou <b>$qtd</b> resultado(s)</p>";
	print"<table class='table table-bordered table-striped table-hover'>";
	print"<tr>";
	print"<th>#</th>";
	print"<th>Paciente</th>";
	print"<th>Médico</th>";
	print"<th>Data</th>";
	print"<th>Hora</th>";
	print"<th>Descrição</th>";
	print"<th>Ações</th>";
	print"</tr>";
	$count = 1;
	while($row=$res->fetch_object()){
		print"<tr>";
		print "<td>".$count++."</td>";
		print "<td>".$row->nome_paciente."</td>";
		print "<td>".$row->nome_medico."</td>";
		print "<td>".$row->data_consulta."</td>";
		print "<td>".$row->hora_consulta."</td>";
		print "<td>".$row->descricao_consulta."</td>";
		print "<td>
			<button class='btn btn-success'onclick=\"location.href='?page=editar-consulta&id_consulta=".$row->id_consulta."';\">Editar</button>
			<button class='btn btn-danger'onclick=\"if(confirm('Tem certeza que quer excluir?')){location.href='?page=salvar-consulta&acao=excluir&id_consulta=".$row->id_consulta."';}else{false;}\">Excluir</button>
			  </td>";
		print"</tr>";
	}
	print"</table>";
	}
else{
	print"<p>Não foram encontrados resultado(s).</p>";
	}	

?>