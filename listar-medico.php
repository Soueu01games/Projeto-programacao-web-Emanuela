<h1>Listar Médico</h1>
<?php
include 'E:\Xampp\htdocs\programacaoweb\config.php';# - pc  casa
#include 'C:\xampp\htdocs\Emanuela\Projeto\config.php';# - pc faculdade
$sql = "SELECT * FROM medico";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0){
	print"<p>Encontrou <b>$qtd</b> resultado(s).</p>";
	print"<table class='table table-bordered table-striped table-hover'>";
	print"<tr>";
	print"<th>#</th>";
	print"<th>Nome</th>";
	print"<th>CRM</th>";
	print"<th>Especialidade</th>";
	print"<th>Ações</th>";
	print"</tr>";
	$count = 1;
	while($row=$res->fetch_object()){
		print"<tr>";
		print "<td>".$count++."</td>";
		print "<td>".$row->nome_medico."</td>";
		print "<td>".$row->crm_medico."</td>";
		print "<td>".$row->especialidade_medico."</td>";
		print "<td>
			<button class='btn btn-success'onclick=\"location.href='?page=editar-medico&id_medico=".$row->id_medico."';\">Editar</button>
			<button class='btn btn-danger'onclick=\"if(confirm('Tem certeza que quer excluir?')){location.href='?page=salvar-medico&acao=excluir&id_medico=".$row->id_medico."';}else{false;}\">Excluir</button>
			  </td>";
		print"</tr>";
	}
	print"</table>";
	}
else{
	print"<p>Não foram encontrados <b>$qtd</b> resultado(s).</p>";
	}	

?>