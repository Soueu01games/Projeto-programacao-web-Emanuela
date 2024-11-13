<h1>Listar Paciente</h1>
<?php
include 'E:\Xampp\htdocs\programacaoweb\config.php'; # - pc casa
#include 'C:\xampp\htdocs\Emanuela\Projeto\config.php'; - pc faculdade
$sql = "SELECT * FROM `paciente`";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0){
	print"<p>Encontrou <b>$qtd</b> resultado(s).</p>";
	print"<table class='table table-bordered table-striped table-hover'>";
	print"<tr>";
	print"<th>#</th>";
	print"<th>Nome</th>";
	print"<th>CPF</th>";
	print"<th>Data</th>";
	print"<th>Sexo</th>";
	print"<th>Telefone</th>";
	print"<th>E-mail</th>";
	print"<th>Endereço</th>";
	print"<th>Ações</th>";
	print"</tr>";
	$count = 1;
	while($row=$res->fetch_object()){
		print"<tr>";
		print "<td>".$count++."</td>";
		print "<td>".$row->nome_paciente."</td>";
		print "<td>".$row->cpf_paciente."</td>";
		print "<td>".$row->data_nasc_paciente."</td>";
		print "<td>".$row->sexo_paciente."</td>";
		print "<td>".$row->fone_paciente."</td>";
		print "<td>".$row->email_paciente."</td>";
		print "<td>".$row->endereco_paciente."</td>";
		print "<td>
			<button class='btn btn-success'onclick=\"location.href='?page=editar-paciente&id_paciente=".$row->id_paciente."';\">Editar</button>
			<button class='btn btn-danger'onclick=\"if(confirm('Tem certeza que quer excluir?')){location.href='?page=salvar-paciente&acao=excluir&id_paciente=".$row->id_paciente."';}else{false;}\">Excluir</button>
			  </td>";
		print"</tr>";
	}
	print"</table>";
	}
else{
	print"<p>Não foram encontrados <b>$qtd</b> resultado(s).</p>";
	}	

?>
